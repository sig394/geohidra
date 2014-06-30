<?php

class Customers extends Eloquent {

	protected $table = 'customers';

	public static $rules = array
    (
        'name' => 'required|between:1,150',
        'content' => 'required',
        'img' => 'required'
    );
}
