<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Secciones del Sitio',

    'single' => 'Secciones del sitio',

    'model' => 'SiteSections',

    /**
     * The display columns
     */
    'columns' => array(
        'section_name' => array(
            'title' => 'Nombre',
            'select' => "(:table).section_name",
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
        'section_name' => array(
            'title' => 'Nombre'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'section_name' => array(
            'title' => 'Nombre',
            'type' => 'text',
        ),
        'content' => array(
            'title' => 'Contenido',
            'type' => 'wysiwyg',
        ),
    ),

);
