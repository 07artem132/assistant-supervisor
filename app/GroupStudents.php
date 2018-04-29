<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupStudents extends Model
{
    function group(){
	    return $this->hasOne( 'App\Group','id','group_id' );
    }
}
