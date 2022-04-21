<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon; 
use Image;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // View slider table 
    public function slider_table(){
        $slider['get_slider'] = Slider::get(); 
        return view('backend.admin.slider.view',$slider);
        
    }

    // Store slider 
    public function frontend_store_slider(Request $request){
        $request->validate([
            'title' =>'required|string',
            'description' =>'required',
            'image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            

            ]);
        if($request->file('image')){
          $slider_img =  $request->file('image');
          $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
          Image::make($slider_img)->fit(1583,500)->save(public_path('upload/slider/'.$name_gen));
          $save_url = 'upload/slider/'.$name_gen;

        }
                   $slider_data = new  Slider();
                   $slider_data->title = $request->title;
                   $slider_data->description = $request->description;
                   $slider_data->image =$save_url;
                   $slider_data->save();
                   $notification = array(
                    'message' => 'Slider Inserted successfully',
                    'alert-type' => 'success'
                    );
                    return  redirect()->back()->with($notification);


    }

    //slider edit 
        public function edit_frontend_slider($id){
                $slider_data['edit_slide'] =  Slider::find($id);
                 return view('backend.admin.slider.edit',$slider_data);


        }
    // slider update function 
    public function update_frontend_slider(Request $request, $id)
    {
            $old_slider  =  Slider::find($id);
            $old_image = $old_slider->image ;
        if($request->file('image')){
            $slider_img =  $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
            Image::make($slider_img)->fit(1583,500)->save(public_path('upload/slider/'.$name_gen));
            $save_url = 'upload/slider/'.$name_gen;
        if(file_exists($old_image)){
        unlink($old_image);  
        }
            $slider_data =   Slider::find($id);
            $slider_data->title = $request->title;
            $slider_data->description = $request->description;
            $slider_data->image =$save_url;
            $slider_data->save();
            $notification = array(
             'message' => 'Slider Image successfully',
             'alert-type' => 'info'
             );
             return  redirect()->route('manage.front.slider')->with($notification);
  
          }
          else{
            $slider_data =   Slider::find($id);
            $slider_data->title = $request->title;
            $slider_data->description = $request->description;
        
            $slider_data->save();
            $notification = array(
             'message' => 'Slider updated successfully',
             'alert-type' => 'success'
             );
             return  redirect()->route('manage.front.slider')->with($notification);
          }
               

    }

    //delete slider image 
            public function delete_frontend_slider($id){
                $old_slider_img = Slider::find($id);
                $del_slider =$old_slider_img->image;
                if(file_exists($del_slider)){
                    unlink($del_slider);
                }
                        $del_slider = Slider::find($id);

                        $del_slider->delete();

                        $notification = array(
                            'message' => 'Slider Deleted successfully',
                            'alert-type' => 'error'
                            );
                            return  redirect()->route('manage.front.slider')->with($notification);
                      

            }
}

