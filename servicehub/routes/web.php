<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ServiceController;
use App\Http\Controllers\AgendaController;
use App\Models\Category;

Route::get('/agendar/{service}', [AgendaController::class, 'create'])->name('agenda.create');
Route::post('/agendar', [AgendaController::class, 'store'])->name('agenda.store');

Route::get('/categories/{IdCategory}/services', [CategoryController::class, 'showServices'])->name('categories.services');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/favoritos', function () {
    return view('favorite');
})->name('favoritos');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/singup', action: function () {
    return view('singup');
})->name('singup');

Route::get('/updateprofile', action: function () {
    return view('updateprofile');
})->name('updateprofile');

Route::get('/sign-in-professional', action: function () {
    return view('pages.sign-in-professional');
})->name('sign-in-professional');

Route::get('/gardening', action: function () {
    return view('gardening');
})->name('gardening');

Route::get('/plumb', action: function () {
    return view('plumb');
})->name('plumb');

Route::get('/cleaning', action: function () {
    return view('cleaning');
})->name('cleaning');

Route::get('/packing', action: function () {
    return view('packing');
})->name('packing');

Route::get('/renovation', action: function () {
    return view('renovation');
})->name('renovation');

Route::get('/profileservice', action: function () {
    return view('profileservice');
})->name('profileservice');



//login y registro cliente
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showRegister'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/favorite', function () {
    return view('favorite');
})->middleware('auth')->name('favorite');

Route::get('/dashboard', function () {
    return view('index');
})->middleware('auth')->name('dashboard');


//login y registro profesional
use App\Http\Controllers\Auth\ProfessionalAuthController;

Route::get('/registrarseProfesional', action: function () {
    return view('pages.sign-up-professional');
})->name('registrarseProfesional');

Route::get('/IniciarSesionProfesional', action: function () {
    return view('pages.sign-in-professional');
})->name('IniciarSesionProfesional');


Route::prefix('professional')->group(function () {
    Route::post('/register', [ProfessionalAuthController::class, 'register'])->name('professional.register');
    Route::post('/login', [ProfessionalAuthController::class, 'login'])->name('professional.login');
    Route::post('/logout', [ProfessionalAuthController::class, 'logout'])->name('professional.logout');
});

Route::get('/Professionaldashboard', action: function () {
    return view('pages.dashboard-professional');
})->name('Professionaldashboard');

Route::post('/logoutProfessional', [ProfessionalAuthController::class, 'logout'])->name('logoutProfessional');

//navbars profesional

Route::get('/TableProfessional', action: function () {
    return view('pages.profesionalTables.Tableprofessional');
})->name('TableProfessional');

Route::get('/billetera', action: function () {
    return view('pages.profesionalTables.billetera');
})->name('billetera');

Route::get('/servicios', action: function () {
    return view('pages.profesionalTables.tableProfesionalService');
})->name('servicios');

Route::get('/registrarServicio', action: function () {
    return view('pages.profesionalTables.serviceForm');
})->name('registrarServicio');

Route::get('/serviceCategory', action: function () {
    return view('pages.profesionalTables.serviceCategoryForm');
})->name('serviceCategory');

//cargar datos
Route::get('/', [CategoryController::class, 'index'])->name('home');

Route::get('/categories/{IdCategory}/services', [CategoryController::class, 'showServices'])
    ->name('categories.services');

//Agregar servicio panel profesional
Route::get('/agregar-servicio', [ServiceController::class, 'create'])->name('services.create');
Route::post('/guardar-servicio', [ServiceController::class, 'store'])->name('services.store');
