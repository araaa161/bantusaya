<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [EmployeeController::class, 'home'])->name('home');

Route::get('login', [EmployeeController::class, 'login'])->name('login');

Route::get('register', [EmployeeController::class, 'register'])->name('register');

Route::get('dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');

Route::get('dashboardkru', [EmployeeController::class, 'dashboardkru'])->name('dashboardkru');

Route::get('dashboardkoor', [EmployeeController::class, 'dashboardkoor'])->name('dashboardkoor');

Route::get('addpasien', [EmployeeController::class, 'addpasien'])->name('addpasien');

Route::post('adddata', [EmployeeController::class, 'adddata'])->name('adddata');

Route::get('datapasien', [EmployeeController::class, 'datapasien'])->name('datapasien');

Route::get('addbiaya', [EmployeeController::class, 'addbiaya'])->name('addbiaya');

Route::get('biayaop', [EmployeeController::class, 'biayaop'])->name('biayaop');

Route::get('addjadwal', [EmployeeController::class, 'addjadwal'])->name('addjadwal');

Route::get('jadwal', [EmployeeController::class, 'jadwal'])->name('jadwal');

Route::get('grafik', [EmployeeController::class, 'grafik'])->name('grafik');

Route::get('user', [EmployeeController::class, 'control'])->name('User');