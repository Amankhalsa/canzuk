<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginf(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]); 
        if(auth()->attempt(array('email'=>$input['email'], 'password'=>$request['password'])))
        {
            if(auth()->user()->role == 1)
            {
                return redirect('admin/dashboard')->with('success','Successfully login');
            }
            else
            {
                return redirect('home')->with('success','Successfully login');   
            }

        }
        else{
            return redirect()->route('login')->with('error', 'Email and Password');
        }
    }
}