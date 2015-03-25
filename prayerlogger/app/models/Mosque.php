<?php

class Mosque extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['mosque_name', 'country', 'state', 'city','street'];


	 public function prayerlogs()
    {
        return $this->hasMany('Prayerlog');
    }

}