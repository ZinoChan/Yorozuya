<?php

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

Route::get('/', function () {
    return view('jobs', [
        'jobs' => Jobs::all()
    ]);
});

Route::get('/jobs/{job}', function (Jobs $job) {
    return view('job', [
        'job' => $job
    ]);
});
