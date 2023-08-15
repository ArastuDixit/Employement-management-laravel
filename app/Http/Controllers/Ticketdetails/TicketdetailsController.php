<?php

namespace App\Http\Controllers\Ticketdetails;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class TicketdetailsController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketdetails()
    
    {
        return view('user.ticket-details');
    }
    
}