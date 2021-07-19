<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected function redirectTo(){
        if( Auth()->user()->role == 1){
            return route('admin.dashboard');
        }
        elseif( Auth()->user() == 2){
            return route('user.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // public function login(Request $request){
    //     $input = $request->all();
    //     $request->validate([
    //                 'username' => 'required|username|exists:users,username',
    //                 'password' => 'required|min:5|max:30'
    //             ],
    //             [
    //                 'username.exists' => "Username ini tidak terdaftar!"
    //             ]);
    //     $kredensil  = $request->only('username', 'password');
    //     if( Auth::attempt($kredensil)){
 
    //      if( auth()->user()->role == 1 ){
    //          return redirect()->route('admin.dashboard');
    //      }
    //      elseif( auth()->user()->role == 2 ){
    //          return redirect()->route('user.dashboard');
    //      }
 
    //     }else{
    //         return redirect()->route('login')->with('error','Username and password tidak valid!');
    //     }
    //  }

    // public function login( Request $request){
    //     request()->validate(
    //         [   'username' => 'required',
    //             'password' => 'required',
    //     ]);
    //     $kredensil  = $request->only('username', 'password');
    
    //     if(Auth::attempt($kredensil)){
    //         $user = Auth::user();
    //         if($user->role == 'admin'){
    //             // dd($u ser);
    //             redirect()->intended('home');
    //         } elseif($user->role == 'bagian_diklat'){
    //             redirect()->intended('blank_page');
    //         }
    //         // return redirect('/');
    //     }
    //     return redirect('login');
    // }
    
}
