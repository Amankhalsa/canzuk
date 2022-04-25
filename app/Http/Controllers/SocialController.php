<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\SupportText;
use App\Models\SocialLinks;
use Carbon\Carbon; 
use Image;



class SocialController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function social_links_data(){
        
        $get_social['social_links'] = SocialLinks::get();
        return view('backend.social.view',$get_social);
        
    }

// store socail links 
public function social_links_store(Request $request)

{
        $request->validate([
            'name' =>'required',
            'icon' =>'required',

         
            'link' =>'required',

            ]);
            
                   if($request->file('image')){
          $social_img =  $request->file('image');
          $name_gen = hexdec(uniqid()).'.'.$social_img->getClientOriginalExtension();
          Image::make($social_img)->resize(30,30)->save(public_path('upload/social/'.$name_gen));
          $save_url = 'upload/social/'.$name_gen;
          
        

        }
            
                 $add_link = new SocialLinks();   
                    $add_link->name = $request->name; 
                    $add_link->icon = $request->icon; 

         
                    $add_link->link = $request->link;
                     $add_link->image = $save_url;
                    
                    $add_link->save();
                    $notification = array(
                        'message' => 'Social link inserted successfully',
                        'alert-type' => 'info'
                        );
                    return redirect()->back()->with($notification);
            
}
    
    
    public function social_links_edit($id){
        
        $edit_social['edit_s_links'] = SocialLinks::find($id);
        return view('backend.social.edit',$edit_social);
        
        
    }
    
    // update 
    public function social_links_update(Request $request , $id){
        $update_img =  SocialLinks::find($id);   
        $old_image = $update_img->image;
//   ================= 
 
        if($request->file('image')){
            $social_img =  $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$social_img->getClientOriginalExtension();
            Image::make($social_img)->resize(30,30)->save(public_path('upload/social/'.$name_gen));
            $img_path = 'upload/social/'.$name_gen;
            
            if (file_exists($old_image)) 
            { 
            unlink($old_image); 
            }
//   ================= 
            $add_link =  SocialLinks::find($id);   
            $add_link->name = $request->name; 
            $add_link->icon = $request->icon;
            $add_link->image = $img_path;
            $add_link->link = $request->link;
            $add_link->save();
            $notification = array(
                'message' => 'Social link updated successfully',
                'alert-type' => 'info'
                );
            return redirect()->route('view.social_links')->with($notification );
                    
            }
            else{
            $add_link =  SocialLinks::find($id);   
            $add_link->name = $request->name; 
            $add_link->icon = $request->icon;
            $add_link->link = $request->link;
            $add_link->save();
            $notification = array(
                'message' => 'Social link updated successfully',
                'alert-type' => 'success'
                );
            return redirect()->route('view.social_links')->with($notification);

          }
               
        
    }
    
    // delete 
    public function delete_socail($id){
        
                    $get_img  = SocialLinks::find($id);
                    $old_img = $get_img->image; 
                    if (file_exists($old_img)) 
					{ 
					unlink($old_img); 
					}   
                $delete_image = SocialLinks::find($id);
                $delete_image->delete();
                     $notification = array(
                'message' => 'Data Deleted successfully',
                'alert-type' => 'error'
                );
                        return redirect()->route('view.social_links')->with($notification);
                      
        
        
    }
    // active inactive 
    public function active_status($id){
                     $activeedata = SocialLinks::find($id);
                       $activeedata->status = 1;  
                       $activeedata->save();
                       $notification = array(
                       'message' => 'Link  status  is Active',
                       'alert-type' => 'success'
                       );
                       return redirect()->route('view.social_links')->with($notification);
    }
    
    // inactive 
    public function inactive_status($id){
        $activeedata = SocialLinks::find($id);
          $activeedata->status = 0;  
          $activeedata->save();
          $notification = array(
          'message' => 'Link  status  is Active',
          'alert-type' => 'success'
          );
          return redirect()->route('view.social_links')->with($notification);
}
}
