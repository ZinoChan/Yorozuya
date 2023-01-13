<?php

use App\Http\Controllers\JobsController;
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
Route::get('/jobs/create', [JobsController::class, 'create']);

//Store a Job
Route::post('/jobs', [JobsController::class, 'store']);

//Show single job
Route::get('/jobs/{job}', [JobsController::class, 'show']);

