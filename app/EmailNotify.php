<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailNotify extends Model
{
	protected $fillable = [
		'user_id', 'status'
	];

}
