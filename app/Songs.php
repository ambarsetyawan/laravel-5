<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Songs extends Eloquent {

	protected $fillable = [
		'title',
		'lyrics',
		'image'
	];

 
}