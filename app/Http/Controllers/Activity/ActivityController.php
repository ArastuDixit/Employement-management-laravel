<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class ActivityController extends Controller
{
    public function activity()
    {
        return view('user.activities');
    }
}
