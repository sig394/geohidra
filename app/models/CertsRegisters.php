<?php

class CertsRegisters extends Eloquent {

	protected $table = 'certs_registers';

	public static $rules = array
    (
        'title' => 'required|between:1,150',
        'content' => 'required',
    );
}
