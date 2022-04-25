<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OurServices;
use Carbon\Carbon; 
use Image;
class OurServicesController extends Controller
{
    //
    public function view_our_services(){
        $get_service['fetch_services'] = OurServices::get();
        return view('backend.our_services.view',$get_service);
    }

    public function social_our_services(Request $request ){
        $request->validate([

            'para1'  => 'required',
            'para2' => 'required',
            'para3' => 'required',
            'para4' => 'required',
            'para5' => 'required',
            'homepara1'   => 'required',
            'homepara2' => 'required',
            'profilepara1' => 'required',
            'profilepara2' => 'required',
            'contactpara1' => 'required',
            'contactpara2' => 'required',
            'img1' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096 ',
            'img2' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096 ',

            ]);


            if($request->file('img1')){
                $image1 =  $request->file('img1');
                $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->fit(385,233)->save(public_path('upload/ourservices/'.$name_gen));
                $save_url = 'upload/ourservices/'.$name_gen;
      
              }
              if($request->file('img2')){
                $service_img =  $request->file('img2');
                $name_gen = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();
                Image::make($service_img)->fit(385,233)->save(public_path('upload/ourservices/'.$name_gen));
                $save_url2 = 'upload/ourservices/'.$name_gen;
      
              }
                $store_data =new  OurServices();
                $store_data->para1   =   $request->para1;
                $store_data->para2   =   $request->para2;
                $store_data->para3   =   $request->para3;
                $store_data->para4   =   $request->para4;
                $store_data->para5   =   $request->para5;
                $store_data->img1     =  $save_url;
                $store_data->img2     =  $save_url2;
                $store_data->homepara1   =    $request->homepara1;
                $store_data->homepara2   =   $request->homepara2;
                $store_data->profilepara1   =      $request->profilepara1;
                $store_data->profilepara2   =    $request->profilepara2;
                $store_data->contactpara1   =     $request->contactpara1;
                $store_data->contactpara2   =     $request->contactpara2;
                $store_data->save();
                $notification = array(
                    'message' => 'Our services  Inserted successfully',
                    'alert-type' => 'success'
            );
                     return  redirect()->back()->with($notification);
    }

    // edit our services data 
    public function our_services_edit($id){

            $data['edit_services'] = OurServices::find($id);
        return view('backend.our_services.edit', $data);


    }

    //update our services 
    public function our_services_update(Request $request, $id){
             $old_img  =  OurServices::find($id);
            $old_image =  $old_img->img1 ;
            $old_image2 =  $old_img->img2 ;

        if($request->file('img1')){
            $image1 =  $request->file('img1');
            $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
            Image::make($image1)->fit(385,233)->save(public_path('upload/ourservices/'.$name_gen));
            $save_url = 'upload/ourservices/'.$name_gen;

            if(file_exists($old_image)){
                unlink($old_image);  
                }
                $store_data =  OurServices::find($id);
                $store_data->para1   =   $request->para1;
                $store_data->para2   =   $request->para2;
                $store_data->para3   =   $request->para3;
                $store_data->para4   =   $request->para4;
                $store_data->para5   =   $request->para5;
                $store_data->img1     =  $save_url;
       
                $store_data->homepara1   =    $request->homepara1;
                $store_data->homepara2   =   $request->homepara2;
                $store_data->profilepara1   =      $request->profilepara1;
                $store_data->profilepara2   =    $request->profilepara2;
                $store_data->contactpara1   =     $request->contactpara1;
                $store_data->contactpara2   =     $request->contactpara2;
                $store_data->save();
                $notification = array(
                    'message' => 'Our services  updated successfully',
                    'alert-type' => 'success'
            );
                     return  redirect()->route('view.our.services_page')->with($notification);
                // ========================== 1st image end  ==============
          }
          if($request->file('img2')){
            $service_img =  $request->file('img2');
            $name_gen = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();
            Image::make($service_img)->fit(385,233)->save(public_path('upload/ourservices/'.$name_gen));
            $save_url2 = 'upload/ourservices/'.$name_gen;

            if(file_exists($old_image2)){
                unlink($old_image2);  
                }        
                $store_data =  OurServices::find($id);
                $store_data->para1   =   $request->para1;
                $store_data->para2   =   $request->para2;
                $store_data->para3   =   $request->para3;
                $store_data->para4   =   $request->para4;
                $store_data->para5   =   $request->para5;
         
                $store_data->img2     =  $save_url2;
                $store_data->homepara1   =    $request->homepara1;
                $store_data->homepara2   =   $request->homepara2;
                $store_data->profilepara1   =      $request->profilepara1;
                $store_data->profilepara2   =    $request->profilepara2;
                $store_data->contactpara1   =     $request->contactpara1;
                $store_data->contactpara2   =     $request->contactpara2;
                $store_data->save();
                $notification = array(
                    'message' => 'Our services  updated successfully',
                    'alert-type' => 'success'
            );
                     return  redirect()->route('view.our.services_page')->with($notification);

          }else{
            
            $store_data->para1   =   $request->para1;
            $store_data->para2   =   $request->para2;
            $store_data->para3   =   $request->para3;
            $store_data->para4   =   $request->para4;
            $store_data->para5   =   $request->para5;
   
            $store_data->homepara1   =    $request->homepara1;
            $store_data->homepara2   =   $request->homepara2;
            $store_data->profilepara1   =      $request->profilepara1;
            $store_data->profilepara2   =    $request->profilepara2;
            $store_data->contactpara1   =     $request->contactpara1;
            $store_data->contactpara2   =     $request->contactpara2;
            $store_data->save();
            $notification = array(
                'message' => 'Our services  updated successfully',
                'alert-type' => 'success'
        );
                 return  redirect()->route('view.our.services_page')->with($notification);
          }

    

    }

    // delete 
    public function delete_our_services($id){

        $old_img  =  OurServices::find($id);
        $old_image =  $old_img->img1;
        $old_image2 =  $old_img->img2;

        if(file_exists($old_image)){
            unlink($old_image);  
            unlink($old_image2);  

            }

        $delete_data =  OurServices::find($id);
        $delete_data->delete();

        $notification = array(
            'message' => 'Our services  Delete successfully',
            'alert-type' => 'error'
    );
             return  redirect()->back()->with($notification);
     
    }

    // active inactive
        public function active_status($id){
        $activeedata = OurServices::find($id);
        $activeedata->status = 1;  
        $activeedata->save();
                $notification = array(
                'message' => 'Link  status  is Active',
                'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
        }

        // inactive 
        public function inactive_status($id){
        $activeedata = OurServices::find($id);
        $activeedata->status = 0;  
        $activeedata->save();
                $notification = array(
                'message' => 'Link  status  is Active',
                'alert-type' => 'success'
                );
                 return redirect()->back()->with($notification);
        }

}
