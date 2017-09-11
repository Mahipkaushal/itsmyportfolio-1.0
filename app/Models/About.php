<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'abouts';

	protected $fillable = [
		'user_id',
		'name',
		'profile_picture',
		'title',
		'description',
		'email',
		'phone',
		'website'
	];

	public static $rules = [
		'name'				=>	'required|min:3|max:190',
		'title'				=>	'required|min:3|max:190',
		'email'				=>	'required|email|min:3|max:190',
		'phone'				=>	'required|min:10|max:10',
		'profile_picture' 	=>	'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	];

	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
