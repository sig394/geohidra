<?php

class News extends Eloquent {

	protected $table = 'news';

	public static $rules = array
    (
        'title' => 'required|between:1,150',
        'content' => 'required',
        'img' => 'required'
    );
}
