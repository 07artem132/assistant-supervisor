<?php

namespace App\Http\Controllers;

use App\EmailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailNotifiesController extends Controller {

	public function __construct() {
		$this->middleware( 'auth' );
	}

	public static function isEnable(): bool {
		$result = EmailNotify::where( 'user_id', '=', Auth::id() )->first();

		if ( empty( $result ) ) {
			return false;
		}

		return (bool) $result->status;
	}

	function bind() {
		EmailNotify::updateOrCreate( [ 'user_id' => Auth::id() ], [ 'status' => 1 ] );

		return redirect()->route( 'home' );
	}

	function removeBind() {
		EmailNotify::where( 'user_id', Auth::id() )->update( [ 'status' => 0 ] );

		return redirect()->route( 'home' );

	}
}
