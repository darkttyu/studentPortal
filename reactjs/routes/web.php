<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacultyLoginController;
use App\Http\Controllers\StudentLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomePage');
})->name('welcomePage');

// Student Routing 
Route::get('/studentLogin', [AuthController::class, 'showStudentLoginForm'])->name('showStudentLoginForm');
Route::post('/studentLogin', [AuthController::class, 'studentLogin'])->name('studentLogin');

Route::get('/dashboard', function() {
    return view('studentDashboard.dashboard');
})->name('dashboard');

// Faculty Routing
Route::get('/facultyLogin', [AuthController::class, 'showFacultyLoginForm'])->name('facultyLogin');
