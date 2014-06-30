<?php

class Projects extends Eloquent {

	protected $table = 'projects';

	public static $rules = array
    (
        'name' => 'required|between:1,150',
        'content' => 'required',
        'img' => 'required'
    );
}
