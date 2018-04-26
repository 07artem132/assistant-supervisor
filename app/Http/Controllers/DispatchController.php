<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DispatchController extends Controller {
	function index() {
		return view( 'dispatch_new' );
    }
}
