<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Certificaciones y Registros',

    'single' => 'Certificaciones y Registros',

    'model' => 'CertsRegisters',

    /**
     * The display columns
     */
    'columns' => array(
        'section_name' => array(
            'title' => 'Nombre',
            'select' => "(:table).title",
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
        'file' => array(
            'title' => 'Archivo',
            'type' => 'file',
            'naming' => 'random',
            'location' => public_path() .'/uploads/certs/',
            'size_limit' => 2,
            'mimes' => 'pdf'
        )
    ),

);
