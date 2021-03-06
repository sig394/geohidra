<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Actualidad',

    'single' => 'Actualidad',

    'model' => 'News',

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
            'output' => '<img src="' . str_replace("/index.php","",url()) . '/uploads/news/(:value)" height="100" />',
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
        'content' => array(
            'title' => 'Contenido',
            'type' => 'wysiwyg',
        ),
        'img' => array(
            'title' => 'Imagen',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/news/',
            'size_limit' => 2,
            'sizes' => array(
        		array(65, 57, 'crop', public_path() . '/uploads/news/thumbs/', 100),    		)
        )
    ),

);
