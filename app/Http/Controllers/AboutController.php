<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutData;
use Carbon\Carbon; 
use Image;
class AboutController extends Controller
{
    //
    public function view_about_data(){
            $data['get_about'] = AboutData::get();
        return view('backend.about_us.view',$data);

    }

    public function about_data_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' =>'required',
            'para1' =>'required',
            'para2' =>'required',
            'brochure' =>'required',
            'image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            

            ]);
        if($request->file('image')){
          $slider_img =  $request->file('image');
          $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
          Image::make($slider_img)->fit(558,631)->save(public_path('upload/about/'.$name_gen));
          $save_url = 'upload/about/'.$name_gen;

        }

            if($request->file('brochure')) 
            {
                $file = $request->file('brochure');
                $filename = time() . '.' . $request->file('brochure')->extension();
                $filePath = public_path() . '/upload/brochure/';
                $brochur_url= $file->move($filePath, $filename);
            }
        

                    $store_about = new   AboutData();

          $store_about->title   = $request->title ;
          $store_about->para1   = $request->para1;
          $store_about->para2   = $request->para2;
   
          $store_about->image   =   $save_url;
          $store_about->brochure    =   $brochur_url;
          $store_about->save();
          $notification = array(
            'message' => ' About Data Inserted successfully',
            'alert-type' => 'success'
            );
            return redirect()->route('view.about_data')->with($notification);
    }


    // edit about us 

    public function data_store_edit($id){
        $edit_data['edit_about'] = AboutData::find($id);
        return view('backend.about_us.edit',$edit_data);

    }


    public function data_store__update(Request $request, $id){
        $old_pic  =  AboutData::find($id);
        $old_image = $old_pic->image ;

        if($request->file('image')){
            $slider_img =  $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
            Image::make($slider_img)->fit(558,631)->save(public_path('upload/about/'.$name_gen));
            $save_url = 'upload/about/'.$name_gen;

            if(file_exists($old_image)){
                unlink($old_image);  
                }
          }
          

          $old_brochure  =  AboutData::find($id);
          $old_brochure_rec = $old_brochure->brochure ;
              if($request->file('brochure')) 
              {
                  $file = $request->file('brochure');
                  $filename = time() . '.' . $request->file('brochure')->extension();
                  $filePath = public_path() . '/upload/brochure/';
                  $brochur_url= $file->move($filePath, $filename);

                  
            if(file_exists($old_brochure_rec)){
                unlink($old_brochure_rec);  
                }
              }
          
  
            $update_about =    AboutData::find($id);

            $update_about->title   = $request->title ;
            $update_about->para1   = $request->para1;
            $update_about->para2   = $request->para2;
     
            $update_about->image   =   $save_url;
            $update_about->brochure    =   $brochur_url;
            $update_about->save();
            $notification = array(
              'message' => ' About Data updated successfully',
              'alert-type' => 'info'
              );
              return redirect()->route('view.about_data')->with($notification);
    }
}
