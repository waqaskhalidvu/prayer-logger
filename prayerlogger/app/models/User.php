<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
		use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	 public function prayerlogs()
    {
        return $this->hasMany('Prayerlog');
    }	




	public static $rules = [
		// 'title' => 'required'
		'fname' => 'required|alpha',
        'lname' => 'required|alpha',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
        'email' => 'required|email|unique:users'
	];

	// Don't forget to fill this array
	protected $fillable = ['fname', 'lname', 'email', 'password', 'active', 'code'];

}