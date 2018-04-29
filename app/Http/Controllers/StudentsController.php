<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Group;
use \Illuminate\View\View;
use App\Http\Requests\StudentStoreRequest;
use App\GroupStudents;

class StudentsController extends Controller {
	public function __construct() {
		$this->middleware( 'auth' );
	}

	function list(): View {
		$students = Students::with( 'groups.group' )->get();
		$students = $students->toArray();

		foreach ( $students as &$student ) {
			$groups = [];

			foreach ( $student['groups'] as &$group ) {
				$groups[] = $group['group']['name'];
			}

			if ( count( $groups ) > 1 ) {
				$student['groups'] = (string) implode( ',', $groups );
			} else {
				$student['groups'] = (string) $groups[0];
			}
		}

		return view( 'StudentsLists', [ 'students' => $students ] );
	}

	function store( StudentStoreRequest $request ) {
		$validated            = $request->validated();
		$students             = new Students;
		$students->surname    = $validated['surname'];
		$students->name       = $validated['name'];
		$students->patronymic = $validated['patronymic'];
		$students->save();
		$groups = $validated['groups'];
		foreach ( $groups as $group ) {
			$groupStudents              = new GroupStudents;
			$groupStudents->group_id    = $group;
			$groupStudents->students_id = $students->id;
			$groupStudents->save();
		}

		return redirect()->route( 'StudentList' );
	}

	function add(): View {
		$groups = Group::all();

		return view( 'StudentsAdd', [ 'groups' => $groups ] );
	}
}
