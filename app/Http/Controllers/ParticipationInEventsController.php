<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationInEventsController extends Controller
{
	public function __construct() {
		$this->middleware( 'auth' );
	}

	function index(){
    	return view('participation_in_events');
    }
}
