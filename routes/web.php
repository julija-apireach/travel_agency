<?php

use App\Http\Livewire\Reviews;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Models\AgencyUser;
use App\Http\Controllers\AgencyUserController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Pedeja briza celojumi
Route::get('/trips/last-minute-offer', function () {
    return view('trips/last-minute');
})->name('last_offer');

//kruizi
Route::get('/trips/cruise', function () {
    return view('trips/cruise');
})->name('kruizi');

//eksotiskie celojumi
Route::get('/trips/exotic-trip', function () {
    return view('trips/exotic-trip');
})->name('exotic');

//atputas braucieni
Route::get('/trips/relax-trip', function () {
    return view('trips/relax-trip');
})->name('relax');

//sleposana
Route::get('/trips/ski', function () {
    return view('trips/ski');
})->name('ski');

//ekskursijas
Route::get('/trips/excursion', function () {
    return view('trips/excursion');
})->name('excurtion');

//avio
Route::get('/trips/avio', function () {
    return view('trips/avio');
})->name('avio');

//blogs
Route::get('/blog', function () {
    return view('livewire/blog');
})->name('blog');

//Atsauksmes - show all
Route::get('/atsauksmes', [ReviewController::class, 'index'])->name('atsauksmes');

//kontakti
Route::get('/kontakti', function () {
    return view('livewire/contacts');
})->name('kontakti');

//mes iesakam
Route::get('/mes-iesakam', function () {
    return view('livewire/recommendations');
})->name('mes-iesakam');

//Registration form view
Route::get('/registrationform', [AgencyUserController::class, 'registrationForm'])
->name('registration');

//Registration form data post to db
Route::post('/registration', [AgencyUserController::class, 'registration'])
->name('registration.post');

//Logout logic 
Route::post('/logout', [AgencyUserController::class, 'logout'])
->name('logout');

//Login form
Route::get('/loginform', [AgencyUserController::class, 'loginForm'])
->name('login');

//Login logic - Auth doesnt work or auth is not saved after login
Route::post('/login', [AgencyUserController::class, 'authenticate'])
->name('login.post');

//test for middleware on profile page - click on Mana rezervacija
Route::get('/mana-rezervacija', function () {
    return view('profile');
    })->name('mana-rezervacija')->middleware('isAuth');



/*Jetstream in
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
