<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Proyectos',

    'single' => 'Proyectos',

    'model' => 'Projects',

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
            'output' => '<img src="' . str_replace("/index.php","",url()) . '/uploads/projects/(:value)" height="100" />',
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
            'location' => public_path() .'/uploads/projects/',
            'size_limit' => 2,
            'sizes' => array(
        		array(65, 57, 'crop', public_path() . '/uploads/projects/thumbs/', 100),    		)
        )
    ),

);
