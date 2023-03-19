<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Jobs;
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
//All Jobs
Route::get('/', [JobsController::class, 'index']);

// Create a Job
Route::get('/jobs/create', [JobsController::class, 'create'])->middleware('auth');

//Store a Job
Route::post('/jobs', [JobsController::class, 'store'])->middleware('auth');

//Edit a Job
Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])->middleware('auth');

//Update a job
Route::put('/jobs/{job}', [JobsController::class, 'update'])->middleware('auth');

//Delete a job
Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->middleware('auth');

//Show single job
Route::get('/jobs/{job}', [JobsController::class, 'show']);

//Authentification
//Register page
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout']);

//Login user page
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Profile
// Manage jobs
Route::get('/profile/jobs', [ProfileController::class, 'manage'])->middleware('auth');

Route::get('/app.js', function () {
    return response(file_get_contents(__DIR__ . '/../api/dist/app.js'))->header('Content-Type', 'application/javascript');
});
