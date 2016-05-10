<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

  	public static $rules = array(
	    'firstName'   => 'required|min:1|max:15',
	    'lastName'   => 'required|min:1|max:15',
	    'password'      => 'required|min:7|max:15',
	    'email'        => 'required|max:100',
	    'phone'   => 'required|min:1|max:15',
	    'address'   => 'required|min:1|max:150',
	);

	public static $loggedInRules = array(
    	'password'      => 'required|min:7|max:15',
    	'email'        => 'required|max:100',
	);
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function orders()
	{
    	return $this->hasMany('Order');
	}
	
	public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
