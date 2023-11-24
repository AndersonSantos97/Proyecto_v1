<?php

use App\Http\Controllers\AgendarCitaController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showed'])->name('users.showed');//ya
Route::post('/login', [LoginController::class,'login'])->name('users.login');

Route::get('/signup', [SignupController::class, 'signup'])->name('users.signup');


Route::post('/signup', [PatientController::class,'store'])->name('users.store');//ya
Route::get('/menupatient', [PatientController::class,'patientMenu'])->name('patient.menu');
Route::get('/agendarcita', [AgendarCitaController::class,'show'])->name('agendarCita');

Route::post('/storecita', [CitaController::class,'store'])->name('cita.store');

Route::get('/logout',[LogoutController::class,'logout'])->name('users.logout');



// Route::get('/signup2', [SignupController::class, 'signupv2'])->name('users.signup2');
// Route::post('/signup2', [SignupController::class, 'storeUser'])->name('users.store2');
Route::get('/ayuda',[AyudaController::class,'show'])->name('ayuda');
//Route::get('/menupaciente', [MenuController::class,''])->name('menupaciente');
