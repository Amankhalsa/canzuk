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
}
