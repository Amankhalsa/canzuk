<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
class AdminController extends Controller
{
    function index()
    {
        return view('backend.admin.index');
    }
    function pending()
    {
        
        $data['inquries'] = Inquiry::latest()->get();
        
        return view('backend.pending.index',$data);
    }
    
    // del 
    public function del_Inquries($id){
        $data = Inquiry::find($id)->delete();
                    $notification = array(
                        'message' => ' Inquries Deleted successfully',
                        'alert-type' => 'error'
                    );
            return redirect()->route('visitor.Inquries')->with($notification);
    }
    function completed()
    {

        $done_data['completed_inquries'] = Inquiry::latest()->where('status','=','1')->get();
        return view('backend.completed.index',$done_data);
    }
    function rejected()
    {
        $reject_data['rejected_inquries'] = Inquiry::latest()->where('status','=','2')->get();
        return view('backend.rejected.index',$reject_data);
    }
}
