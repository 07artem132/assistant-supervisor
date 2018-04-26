<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationInEventsController extends Controller
{
    function index(){
    	return view('participation_in_events');
    }
}
