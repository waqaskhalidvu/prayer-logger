<?php

class Prayerlog extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	 protected $fillable = ['logged', 'offered', 'prayer_name', 'prayer_date', 'prayer_type', 'offered_date', 'offered_time', 'user_id', 'mosque_id'];

	public function users()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    	}

    public function mosques()
    {
        return $this->belongsTo('Mosque', 'mosque_id', 'id');
    	}
   

}