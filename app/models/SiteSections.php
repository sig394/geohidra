<?php

class SiteSections extends Eloquent {

	protected $table = 'site_sections';

	public static $rules = array
    (
        'section_name' => 'required|between:1,50',
        'content' => 'required',
    );
}
