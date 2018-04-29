<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyTables extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'activations', function ( Blueprint $table ) {
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
		} );
		Schema::table( 'persistences', function ( Blueprint $table ) {
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
		} );
		Schema::table( 'reminders', function ( Blueprint $table ) {
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
		} );
		Schema::table( 'role_users', function ( Blueprint $table ) {
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
			$table->foreign( 'role_id' )->references( 'id' )->on( 'roles' )->onDelete( 'cascade' );
		} );
		Schema::table( 'throttle', function ( Blueprint $table ) {
			$table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
		} );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'activations', function ( Blueprint $table ) {
			$table->dropForeign( [ 'user_id' ] );
		} );
		Schema::table( 'persistences', function ( Blueprint $table ) {
			$table->dropForeign( [ 'user_id' ] );
		} );
		Schema::table( 'reminders', function ( Blueprint $table ) {
			$table->dropForeign( [ 'user_id' ] );
		} );
		Schema::table( 'role_users', function ( Blueprint $table ) {
			$table->dropForeign('role_users_role_id_foreign');
			$table->dropForeign('role_users_user_id_foreign');
		} );
		Schema::table( 'throttle', function ( Blueprint $table ) {
			$table->dropForeign( [ 'user_id' ] );
		} );

	}
}
