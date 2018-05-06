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
			$groups = Students::with( 'groups.group' )->surname( $user['surname'] )->name( $user['name'] )->patronymic( $user['patronymic'] )->first();
			$roles  = \Cartalyst\Sentinel\Users\EloquentUser::find( $user['id'] )->roles()->get();

			if ( $roles->isEmpty() ) {
				$user['roles'] = 'Нет';
			}

			if ( empty( $groups ) ) {
				$user['groups'] = 'Нет';
				continue;
			}

			foreach ( $roles as $role ) {
				$studentRole[] = $role->name;
			}

			foreach ( $groups['groups'] as &$group ) {
				$studentGroups[] = $group['group']['name'];
			}

			if ( count( $studentGroups ) > 1 ) {
				$user['groups'] = implode( ', ', $studentGroups );
			} else {
				$user['groups'] = (string) $studentGroups[0];
			}

			if ( count( $studentRole ) > 1 ) {
				$user['roles'] = implode( ', ', $studentRole );
			} else {
				$user['roles'] = (string) $studentRole[0];
			}
		}
		return view( 'UsersLists', [ 'users' => $users ] );
	}
}
