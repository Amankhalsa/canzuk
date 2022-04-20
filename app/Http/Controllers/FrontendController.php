<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function about()
    {
        return view('frontend.about');
    }
    function services()
    {
        return view('frontend.service');
    }
    function contact()
    {
        return view('frontend.contact');
    }
    
    public function home_Inquries(Request $request){
        
            $request->validate([
            'name' =>'required',
              'phone' =>'required',
              'email' =>'required',
                'services' =>'required',
                  'message' =>'required',
            ]);
            $data = new Inquiry();
             $data->name = $request->name;
              $data->phone = $request->phone;
               $data->email = $request->email;
               $data->services = $request->services;
                $data->message = $request->message;
                  $data->save();
                  
                        $notification = array(
                        'message' => 'Your Inquries submitted successfully',
                        'alert-type' => 'success'
                        );
      
                   return redirect()->route('front.homepage')->with($notification);
                
             
            
        
        
    }
}
