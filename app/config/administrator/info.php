<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Informacion',

    'single' => 'Informacion',

    'model' => 'Info',

    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Titulo',
            'select' => "(:table).title",
        ),
        'content' => array(
            'title' => 'Contenido',
            'select' => "(:table).content",
        ),
        'img' => array(
            'title' => 'Imagen',
            'output' => '<img src="' . str_replace("/index.php","",url()) . '/uploads/info/(:value)" height="100" />',
        )
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'title' => array(
            'title' => 'Titulo'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Titulo',
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
            'location' => public_path() .'/uploads/info/',
            'size_limit' => 2
        ),
        'order' => array(
            'title' => 'Orden',
            'type' => 'number',
            'decimals' => 0,
        ),
    ),

);
