<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Banners',

    'single' => 'Banners',

    'model' => 'Banners',

    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Nombre',
            'select' => "(:table).title",
        ),
        'img' => array(
            'title' => 'Imagen',
            'output' => '<img src="' . str_replace("/index.php","",url()) . '/uploads/banners/(:value)" height="100" />',
        )
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'title' => array(
            'title' => 'Nombre'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Nombre',
            'type' => 'text',
        ),
        'img' => array(
            'title' => 'Imagen',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/banners/',
            'size_limit' => 2,
            'sizes' => array(
        		array(65, 57, 'crop', public_path() . '/uploads/banners/thumbs/', 100),    		)
        )
    ),

);
