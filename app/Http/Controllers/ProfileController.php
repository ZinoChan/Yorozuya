<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // manage jobs
    public function manage(){
        return view('profile.manage', ['jobs' => auth()->user()->jobs()->get()]);
    } 
}
