<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    use AuthenticatesUsers;
	
	protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        
    }

    public function showLoginForm()
	{
		return view('admin.auth.login');
	}

    public function login(Request $request)
    {

        $auth = false;
        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            $auth = true;
        }

        if ($request->ajax()) {
            
            if($auth) {                
                return response()->json([
                    'status'    =>  true,
                    'message'   =>  'Logged in successfully!<br />Redirecting to Dashboard...',
                    'redirect'  =>  URL::route('dashboard')
                ], 200);
            } else {
                return response()->json([
                    'status'    =>  false,
                    'message'   =>  'Invalid Username/Password!'
                ], 401);
            }

        } else {
            return redirect()->intended(URL::route('dashboard'));
        }

        return redirect(URL::route('login'));
    }

    public function logout(){

        $this->guard()->logout();

        return redirect(URL::route('login'));

    }
}
