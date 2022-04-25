<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\SupportText;
use Carbon\Carbon; 
use Image;


class HomeAboutController extends Controller
{
    // auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    // View table  support-text
    public function view_home_contact(){
        $get_data['home_data'] = HomeContent::get();
        return view('backend.home_data.view',$get_data);

    }
    // home data store 
    public function home_data_store(Request $request ){
    // dd($request->all());
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'profile' =>'required',
            'consultants' =>'required',
            'mission' =>'required',
            'whoweare' =>'required',
            ]);
            if($request->file('image')){
                $slider_img =  $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
                Image::make($slider_img)->fit(469,388)->save(public_path('upload/about/'.$name_gen));
                $save_url = 'upload/about/'.$name_gen;
      
              }
              $data = new HomeContent();
              $data->title        = $request->title;
              $data->description  = $request->description;
              $data->profile      = $request->profile;
              $data->consultants  = $request->consultants;
              $data->mission      = $request->mission;
              $data->whoweare     = $request->whoweare;
              $data->image        = $save_url ;
  
              $data->save();
              $notification = array(
                  'message' => 'Home data Inserted successfully',
                  'alert-type' => 'success'
                  );
                  return  redirect()->back()->with($notification);

    }

    // edit home page content 
    public function home_data_edit($id){
        $edit_data['edit_data'] = HomeContent::find($id);
        return view('backend.home_data.edit',$edit_data);


    }

    // update data 
    public function home_data_update(Request $request , $id){

        $old_image  =  HomeContent::find($id);
        $delold_image = $old_image->image ;

        if($request->file('image')){
            $slider_img =  $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
            Image::make($slider_img)->fit(469,388)->save(public_path('upload/about/'.$name_gen));
            $save_url = 'upload/about/'.$name_gen;

            if(file_exists($delold_image)){
                unlink($delold_image);  
                }
            $data =  HomeContent::find($id);
            $data->title        = $request->title;
            $data->description  = $request->description;
            $data->profile      = $request->profile;
            $data->consultants  = $request->consultants;
            $data->mission      = $request->mission;
            $data->whoweare     = $request->whoweare;
            $data->image     = $save_url ;

            $data->save();
            $notification = array(
                'message' => 'Home image Updated successfully',
                'alert-type' => 'info'
                );
                return  redirect()->route('view.home_content')->with($notification);
  
          }else{
            $data =  HomeContent::find($id);
            $data->title        = $request->title;
            $data->description  = $request->description;
            $data->profile      = $request->profile;
            $data->consultants  = $request->consultants;
            $data->mission      = $request->mission;
            $data->whoweare     = $request->whoweare;
 

            $data->save();
            $notification = array(
                'message' => 'Home data Updated successfully',
                'alert-type' => 'info'
                );
                return  redirect()->route('view.home_content')->with($notification);
  
          }

    
    }

    // delete method 

    public function delete_home_data($id){

        $delimage  =  HomeContent::find($id);
        $delold_image = $delimage->image ;
        
        if(file_exists($delold_image)){
            unlink($delold_image);  
            }
        $del_data = HomeContent::find($id);
        $del_data->delete();
        $notification = array(
            'message' => 'Home data Deleted successfully',
            'alert-type' => 'error'
            );
            return  redirect()->route('view.home_content')->with($notification);
    }


    // ================================= support text ==========================

    public function view_support_text(){

        $get_data['support_data'] = SupportText::get();

        return view('backend.support_footer.view',$get_data);
    }

    // store support and country data 
    public function support_text_store(Request $request){   
                $request->validate([
                    'country_title' =>'required',
                    'country_title_2' =>'required',
                    'description' =>'required',
                    'get_in_touch' =>'required',
                    'side_description' =>'required',
                    ]);
        $store_support_text = new  SupportText();
        $store_support_text->country_title        = $request->country_title;
        $store_support_text->country_title_2      = $request->country_title_2;
        $store_support_text->description          = $request->description;
        $store_support_text->get_in_touch         = $request->get_in_touch;
        $store_support_text->side_description     = $request->side_description;
        $store_support_text->save();
            
            $notification = array(
            'message' => 'Data Inserted successfully',
            'alert-type' => 'success'
            );
            return  redirect()->back()->with($notification);

    }

    // ================ edit support data ==================
                public function support_data_edit($id){

              $edit_data['support_data_edit'] = SupportText::find($id);

            return view('backend.support_footer.edit',$edit_data);

                }
            // update support data 
            public function support_data_update(Request $request, $id){
              
                $update_data = SupportText::find($id);
          
                $update_data->country_title        = $request->country_title;
                $update_data->country_title_2      = $request->country_title_2;
                $update_data->description          = $request->description;
                $update_data->get_in_touch         = $request->get_in_touch;
                $update_data->side_description     = $request->side_description;
                $update_data->save();
                    
                    $notification = array(
                    'message' => 'Data updated successfully',
                    'alert-type' => 'info'
                    );
                    return  redirect()->route('view.support_text')->with($notification);

            }
            // trash delete 
            public function delete_support_text($id){
                $delete_data = SupportText::find($id);
                $delete_data->delete();
                $notification = array(
                    'message' => 'Data Deleted successfully',
                    'alert-type' => 'error'
                    );
                    return  redirect()->route('view.support_text')->with($notification);

            }

}
