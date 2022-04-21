<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inquiry;
class StatusController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function complete_inquries($id){
        $activeedata = Inquiry::find($id);
        $activeedata->status = 1;  
        $activeedata->save();
           $notification = array(
             'message' => 'Inquries status is  Completed',
          'alert-type' => 'success'
             );
         return redirect()->back()->with($notification);

    }
    public function pending_inquries($id){
        $pendingdata = Inquiry::find($id);
        $pendingdata->status = 0;  
        $pendingdata->save();
           $notification = array(
             'message' => 'Inquries status  is  Pending',
          'alert-type' => 'warning'
             );
         return redirect()->back()->with($notification);

    }
    public function rejected_inquries($id){
        $rejectdata = Inquiry::find($id);
        $rejectdata->status = 2;  
        $rejectdata->save();
           $notification = array(
             'message' => 'Inquries status  is Rejected',
          'alert-type' => 'error'
             );
         return redirect()->back()->with($notification);

    }
}
