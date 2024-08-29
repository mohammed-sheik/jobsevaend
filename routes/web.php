<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/recruiter', function () {
    return view('layouts.recruiter');
});
Route::get('/jobseeker', function () {
    return view('layouts.jobseeker');
});

Route::get('/contacts', function () {
    return view('layouts.contacts');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/terms', function () {
    return view('layouts.terms');
});

Route::get('/privacy', function () {
    return view('layouts.privacy');
});

Route::get('/refund', function () {
    return view('layouts.refund');
});






