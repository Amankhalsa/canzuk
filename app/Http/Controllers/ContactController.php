<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon; 
use Image;
class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //view contact table 
    public function contact_table(){
        $data['get_address'] = Contact::get(); 
        return view('backend.admin.contact.view',$data);

    }
    //contact store 
    public function contact_store(Request $request){
        // dd($request->all());
        $request->validate([
            'email' =>'required|email',
            'time' =>'required',
            'address' =>'required',
            'phone' =>'required',
            

            ]);
            $save_contact =new Contact();
            $save_contact->email = $request->email;
            $save_contact->time = $request->time;
            $save_contact->address = $request->address;
            $save_contact->phone = $request->phone;
            $save_contact->save();
            $notification = array(
             'message' => 'Contact Inserted successfully',
             'alert-type' => 'success'
             );
             return  redirect()->back()->with($notification);

 
    }

    // edit contact address 
    public function contact_edit($id){
        $edit_data['edit_address'] = Contact::find($id); 

        return view('backend.admin.contact.edit',$edit_data);



    }

    // update contact 
    public function update_contact(Request $request, $id){
        $save_contact = Contact::find($id);
        $save_contact->email = $request->email;
        $save_contact->time = $request->time;
        $save_contact->address = $request->address;
        $save_contact->phone = $request->phone;
        $save_contact->save();
        $notification = array(
         'message' => 'Contact updated successfully',
         'alert-type' => 'success'
         );
         return  redirect()->route('view.contact_address')->with($notification);
    }

    // delete  
    public function delete_contact($id){

        $del_data = Contact::find($id); 

        $del_data->delete();
        $notification = array(
            'message' => 'Contact Deleted successfully',
            'alert-type' => 'error'
            );
            return  redirect()->route('view.contact_address')->with($notification);

    }
}
