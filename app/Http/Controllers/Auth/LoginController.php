<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = User::where('email',$request->email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($request->password,$data->password)){
                Auth::login($data);

                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);

                $request->session()->flash('failed', 'Success');
                return redirect('dashboard');
            }else{
                $request->session()->flash('failed', 'Check your password');
                return redirect()->back();
            }
        }
        else{
            $request->session()->flash('failed', 'Check your username');
            return redirect()->back();

        }

        $request->session()->flash('failed', 'not clear');
        return redirect()->back();
    }
}
