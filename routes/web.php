<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicEntityController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('users.login');

Route::get('/signup', [SignupController::class, 'signup'])->name('users.signup');

Route::post('/signup', [SignupController::class,'create'])->name('signup.create');



Route::get('/patient', [PatientController::class,'patient']);

Route::get('/medicEntity', [MedicEntityController::class,'medicEntity']);


Route::get('users/registrarse','UserController@registrarse') ->name('users.singup');

Route::post('users', 'UserController@create')->name('users.create');

Route::get('users/{user}', 'UserController@show')->name('users.show');

Route::get('users/{user}/edit','UserController@edit')->name('users.edit');

Route::match(['put','patch'],'users/{user}', 'UserController@update')->name('users.update');

Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');