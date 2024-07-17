<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\AgencyUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AgencyUserController extends Controller
{
     // Show Register/Create Form
     public function registrationForm() {
        return view('user-form/registration');
    }

    // Create New User
    public function registration(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|string|email|max:255|unique:agency_users,email',
            'street' => 'required|string|max:255',
            'optional_field' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255|unique:agency_users,passport_number',
            'passport_expiry' => 'required|date',
            'phone' => 'required|string|max:255|unique:agency_users,phone',
            'attachment' => 'nullable|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hash Password
        //$formFields['password'] = bcrypt($formFields['password']);
        $formFields['password'] = Hash::make($formFields['password']);

         // Create User
        $user = AgencyUser::create($formFields);

        // If user creation failed
        if($user) {
            $message = 'Jūs esat veiksmīgi reģistrējies!';
            return redirect()->route('login')->with('status', $message); 
        }else{
            return back()->withErrors(['error' => 'User is not created. Kaut kas nogāja greizi. Lūdzu, mēģiniet vēlreiz.']);
        }
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Jūs esat veiksmīgi atslēdzies!');

    }

    // Show Login Form
    public function loginForm() {
        return view('user-form/login');
    }

    // Authenticate User/ Login
    public function authenticate(Request $request) {
         $formFields = $request->validate([
             'email' => ['required', 'email'],
             'password' => 'required'
        ]);

        //debug for formfields
        Log::info('Form fields:', $formFields);

        //find user by email in db
        $user = AgencyUser::where('email', $request->email)->first();
        
        // debug if email not found
        if (!$user) {
            Log::warning('Email not found:', ['email' => $request->email]);
            return back()->withErrors(['email' => 'Email not found'])->onlyInput('email');
        }

        //found user data for debug
        Log::info('User found:', $user->toArray());

        //Checking password
        if (!Hash::check($request->password, $user->password)) {
            Log::warning('Incorrect password attempt:', ['email' => $request->email]);
            return back()->withErrors(['password' => 'Incorrect password'])->onlyInput('email');
        }

        //Try to authenticate user
        Auth::login($user);
        if (Auth::check()) {
            // new session for safity
            $request->session()->regenerate();
            Log::info('User authenticated and session regenerated:', ['email' => $request->email]);

            // Successfull login
            $message = '<strong>' . $user->name . '</strong>, Jūs esat veiksmīgi pieslēdzies!';
            return redirect()->intended('/')->with('status', $message);
        } else {
            // unsuccessfull login
            Log::error('Authentication failed after Auth::login:', ['email' => $request->email]);
            return back()->withErrors(['email' => 'Authentication failed'])->onlyInput('email');
        }
}
}
