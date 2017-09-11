<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static $rules = [
    	'username'			=>	'required|min:5|max:20|unique:users',
    	'name'				=>	'required',
    	'email'				=>	'required|email',
    	'password'			=>	'required',
    	
    ];

    public function about()
    {
        return $this->hasOne('App\Models\About', 'user_id');
    }
}
