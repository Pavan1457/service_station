<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'plans';
	public $timestamps = true;
    
	protected $fillable = [
		'name', 'price','description',
    	];
}
