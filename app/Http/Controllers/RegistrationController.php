<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgencyUser;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //Show registration form
    public function registrationForm() {
        return view('registration');
    }

    //Validate registration data and post to db
    public function registration(Request $request)
    {
        // Form data validation
        $validatedData = $request->validate([
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

        //password hash
        $validatedData['password'] = Hash::make($request->password);

        // Create new user in db agency_travel
        $user = AgencyUser::create($validatedData);

        // Redirect after successfull registration to login with success message
        $message = 'Jūs esat veiksmīgi reģistrējies!';
        return redirect()->route('login')->with('status', $message); 
    }
}
