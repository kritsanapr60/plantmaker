<?php

namespace App\Http\Controllers\Auth;

use AuthenticatesUsers {
    logout as performLogout;
}
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected function redirectTo()
    // {
    //     return '/home';

    //     if ($user->role == 'super_admin') {
    //         return '/admin/user';
    //     } else {
    //         return '/home';
    //     }
    // }
    public function authenticated($request, $user)
    {
        if ($user->hasRole('super-admin')) {
            return redirect('admin/user');
        } else {
            return redirect('/home');
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
    public function username()
    {
        return 'username';
    }
    public function logout(Request $request)
{
    $this->performLogout($request);
    return redirect()->route('/map');
}
}
