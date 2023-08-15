<?php

namespace App\Http\Controllers\Ticketlist;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class TicketlistController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketlist()
    
    {
        return view('user.ticket-list');
    }
    
}