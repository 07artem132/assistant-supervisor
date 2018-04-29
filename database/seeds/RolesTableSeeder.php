<?php

use Illuminate\Database\Seeder;

class   RolesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table( 'roles' )->insert( [
			'slug'        => 'administrator',
			'name'        => 'Administrator',
			'permissions' => '{}',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')
		] );
		DB::table( 'roles' )->insert( [
			'slug'        => 'moderator',
			'name'        => 'Moderator',
			'permissions' => '{}',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')
		] );
		DB::table( 'roles' )->insert( [
			'slug'        => 'student',
			'name'        => 'Student',
			'permissions' => '{}',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')
		] );

	}
}
