<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model {
	function groups() {
		return $this->hasMany( 'App\GroupStudents' );
	}

	function scopeSurname( $query, $surname ) {
		return $query->where( 'surname', '=', $surname );
	}

	function scopeName( $query, $Name ) {
		return $query->where( 'Name', '=', $Name );
	}

	function scopePatronymic( $query, $Patronymic ) {
		return $query->where( 'patronymic', '=', $Patronymic );
	}

}
