<?php

class Info extends Eloquent {

	protected $table = 'info';

	public static $rules = array
    (
        'title' => 'required|between:1,15',
        'content' => 'required',
        'img' => 'required',
        'order' => 'required'
    );
}
