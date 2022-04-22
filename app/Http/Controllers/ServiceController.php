<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Servies;

class ServiceController extends Controller
{
    //

    public function view_services(){
            $get_service['services'] = Servies::get();
        return view('backend.services.view',$get_service);

    }

    // store 
    public function home_services_store(Request $request ){
        $request->validate([
            'name' =>'required',
            'heading' =>'required',
            'icon' =>'required',
            'title' =>'required',
            'description' =>'required',
            ]);

            $add_service = new  Servies();
                $add_service-> name =$request->title;
                $add_service->heading=$request->heading;
                $add_service->icon=$request->icon;
                $add_service->title=$request->title;
                $add_service->description=$request->description;
                $add_service->save();
                $notification = array(
                    'message' => 'Data Inserted successfully',
                    'alert-type' => 'success'
                    );
                    return  redirect()->back()->with($notification);
                    }

            // edit home page services 
            public function home_services_edit($id){
                    $get_data['get_services'] =Servies::find($id);
                    $notification = array(
                        'message' => 'Service Data edit page open',
                        'alert-type' => 'warning'
                        );
            return view('backend.services.edit',$get_data)->with($notification);
            }   
        // update service 
        public function home_services_update(Request $request, $id){
            // dd($request->all());
            $update_service =   Servies::find($id);
            // $add_service-> name =$request->title;
            // $add_service->heading=$request->heading;
            $update_service->icon=$request->icon;
            $update_service->title=$request->title;
            $update_service->description=$request->description;
            $update_service->save();
            $notification = array(
                'message' => 'Data Updated successfully',
                'alert-type' => 'info'
                );
                return  redirect()->route('view.home_services')->with($notification);

                }
        
                // Delete home service data cards
                public function delete_home_services($id){
                    $del_services =   Servies::find($id);
             
                    $del_services->delete();
                    $notification = array(
                        'message' => 'Service card Deleted successfully',
                        'alert-type' => 'error'
                        );
                        return  redirect()->route('view.home_services')->with($notification);
        
                }

}
