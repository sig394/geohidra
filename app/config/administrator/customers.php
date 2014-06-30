<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Clientes',

    'single' => 'Clientes',

    'model' => 'Customers',

    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Nombre',
            'select' => "(:table).name",
        ),
        'img' => array(
            'title' => 'Imagen',
            'output' => '<img src="/uploads/customers/thumbs/(:value)" height="100" />',
        )
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Nombre'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
        ),
        'content' => array(
            'title' => 'Contenido',
            'type' => 'wysiwyg',
        ),
        'img' => array(
            'title' => 'Imagen',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/customers/',
            'size_limit' => 2,
            'sizes' => array(
        		array(65, 57, 'crop', public_path() . '/uploads/customers/thumbs/', 100),    		)
        )
    ),

);
