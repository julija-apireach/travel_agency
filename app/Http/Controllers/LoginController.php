<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AgencyUser;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Show login Form
    public function loginForm() {
        return view('login');
    }

    //Login logic
    public function login(Request $request) {

        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );

        //find first user by email in db
        $user = AgencyUser::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            //if user is found and pass matches, then auth makes session for this user
            Auth::login($user);
            //regenerate session for security, protect from attack
            $request->session()->regenerate();
            //redirect on main page (where we have to chang register and login links to logout on topbar.blade)
            //message for successful login
            $message = '<strong>' . $user->name . '</strong>, Jūs esat veiksmīgi pieslēdzies!';
            return redirect()->intended('/')->with('status',$message);
        }

        return back()->withErrors([
            'email' => 'Epasts vai parole nav korekti.',
            ])->onlyInout('email');//value old only for email
        }

    //Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('status','Jūs esat veiksmīgi atslēdzies!');
    }

}
