<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('employee.dashboard');
    Route::prefix('employer/dashboard')->group(function(){
        Route::get('/', [EmployerController::class, 'employerIndex'])->name('employer.dashboard');
        Route::get('/tables', [EmployerController::class, 'tables'])->name('employer.dashboard.tables');
        Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
        Route::get('/job/create', [JobsController::class, 'create'])->name('job.create');
        Route::post('/job/create', [JobsController::class, 'store'])->name('job.create');
    });
});



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');


