<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Servicios',

    'single' => 'Servicios',

    'model' => 'Services',

    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Nombre',
            'select' => "(:table).name",
        ),
        'created_at' => array(
            'title' => 'Agregada',
            'select' => "(:table).created_at",
            'type' => 'datetime',
            'date_format' => 'dd-mm-yyyy',
            'time_format' => 'HH:mm',
        ),
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
    ),

);
