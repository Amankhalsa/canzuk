<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logoSeting;
use Carbon\Carbon; 
use Image;
class Managelogo extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

    // Manage logo for frontend 
    public function logo_table(){
        $logo['get_logo'] = logoSeting::get(); 
        return view('backend.logo.view',$logo);
    }

    // Add logo
    public function frontend_store_logo(Request $request){
        // dd($request->all());
   $request->validate([
            'logo_img' =>'required',
            ]);
         // $old_image = $request->old_image;
        if ($request->file('logo_img')) {
        $image = $request->file('logo_img');
        $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->fit(61,80)->save(public_path('upload/logo/'.$name_gen));
        $save_url = 'upload/logo/'.$name_gen;
        }

        // if (file_exists($old_image)) 
        // { 
        // unlink($old_image); 
        // }

                $data = new logoSeting();   
                $data->logo_img =$save_url;
                $data->save();
                $notification = array(
                'message' => 'Frontend logo Uploaded successfully',
                'alert-type' => 'success'
                );
                return  redirect()->back()->with($notification);

    }
    // edit front end logo
    public function edit_frontend_logo($id){
            $edit['edit_logo'] =logoSeting::find($id);
        return view('backend.logo.edit',$edit);

    }

    // update logo 
    public function update_frontend_logo(Request $request, $id){
                $logodata  =  logoSeting::find($id);
                $old_image = $logodata->logo_img ;
                if ($request->file('logo_img')) {
                    $image = $request->file('logo_img');
                    $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->fit(61,80)->save(public_path('upload/logo/'.$name_gen));
                    $save_url = 'upload/logo/'.$name_gen;
                    if(file_exists($old_image))  {
                        // dd($old_image);
                            unlink($old_image);
                        }
                    }
                    // end main if  
                    
                $savelogo =  logoSeting::find($id);   
                $savelogo->logo_img =$save_url;
                $savelogo->save();
                $notification = array(
                'message' => 'logo updated successfully',
                'alert-type' => 'info'
                );
                return  redirect()->route('manage.front.logo')->with($notification);
             
                
    }

    //delete logo
    public function delete_frontend_logo($id){
        $deldata  =  logoSeting::find($id);
        $old_image = $deldata->logo_img;
        if(file_exists($old_image))  {
            // dd($old_image);
                unlink($old_image);
             
              
            }
      
                   
        $savelogo =  logoSeting::find($id);   
    
        $savelogo->delete();
        $notification = array(
        'message' => 'logo deleted successfully',
        'alert-type' => 'error'
        );
        return  redirect()->route('manage.front.logo')->with($notification);
     

    }

}
