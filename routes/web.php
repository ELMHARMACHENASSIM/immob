<?php

use App\Livewire\About;
use App\Livewire\Calendar;
use App\Livewire\Chat;
use App\Livewire\Contacts;
use App\Livewire\Darkmode;
use App\Livewire\Dashboard;
use App\Livewire\Homepage;
use App\Livewire\Parcours;
use App\Livewire\Signin;
use App\Livewire\Signup;
use App\Livewire\Social;
use Illuminate\Support\Facades\Route;

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


Route::get('/', Homepage::class);
Route::get('/about', About::class);
Route::get('/social', Social::class);
Route::get('/signin', Signin::class)->name('signin');
Route::get('/signup', Signup::class);
Route::get('/chat', Chat::class);
Route::get('/contacts', Contacts::class);
Route::get('/calendar', Calendar::class);
Route::get('/parcours', Parcours::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class);
});

