<?php

namespace App\Http\Controllers\Appcalendar;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class AppcalendarController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function appcalendar()
    
    {
        return view('user.app-calendar');
    }
    
}