<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // dd($user);
        if($user->role_id == 1) {
          return redirect()->route('superadmin.dashboard');
        } elseif ($user->role_id == 2) {
          return redirect()->route('store.dashboard');
        } elseif ($user->role_id == 3) {
          return redirect()->route('customer.dashboard');
        } elseif ($user->role_id == 4) {
          return redirect()->route('driver.dashboard');
        }

        /*
        if ($user->hasRole('admin')) {
            return redirect()->route('superadmin.dashboard');
        } elseif ($user->hasRole('store')) {
            return redirect()->route('store.dashboard');
        } else {
            return redirect('/home');
        }
        */
    }
}
