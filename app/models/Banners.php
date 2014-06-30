<?php

class Banners extends Eloquent {

	protected $table = 'banners';

	public static $rules = array
    (
        'title' => 'required|between:1,255',
        'img' => 'required',
    );
}
