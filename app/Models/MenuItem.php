<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

 	function children()
	    {
	        return $this->hasMany(self::class, 'parent_id')->with('children');
	    }
}
