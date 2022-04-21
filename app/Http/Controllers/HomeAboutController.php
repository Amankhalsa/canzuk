<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeContent;
use Carbon\Carbon; 
use Image;
class HomeAboutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    // View table 
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

}
