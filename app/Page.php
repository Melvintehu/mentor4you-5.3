<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    
	protected $fillable = [
		'name',

	];

    public function sections(){
    	return $this->hasMany('App\Section');
    }

}
