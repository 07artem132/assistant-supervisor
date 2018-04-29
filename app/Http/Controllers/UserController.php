<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Students;

class UserController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	function index() {
		return view( 'profile' );
	}

	function List() {
		$users = User::all()->toArray();

		foreach ( $users as &$user ) {
			$student = Students::with( 'groups.group' )->surname( $user['surname'] )->name( $user['name'] )->patronymic( $user['patronymic'] )->first();
			if ( empty( $student ) ) {
				$user['groups'] = 'Нет';
				continue;
			}

			foreach ( $student['groups'] as &$group ) {
				$studentGroups[] = $group['group']['name'];
			}

			if ( count( $studentGroups ) > 1 ) {
				$user['groups'] = explode( ',', $studentGroups );
			} else {
				$user['groups'] = (string) $studentGroups[0];
			}
		}

		return view( 'UsersLists', [ 'users' => $users ] );

	}
}
