<?php

class Services extends Eloquent {

	protected $table = 'services';

	public static $rules = array
    (
        'name' => 'required|between:1,150',
        'content' => 'required',
    );
}
