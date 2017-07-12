<?php
return [
    'plugin_name' => '{PLUGIN_NAME}',
    
    // Il namespace del plugin
    // Deve esistere una cartella omonima nella root del progetto
    'plugin_namespace' => '{PLUGIN_NAMESPACE}',
    
    'menu_page' => [
        'page_title' => '{PLUGIN_NAME}',
        'menu_title' => '{PLUGIN_NAME}',
        'menu_slug' => '',
        'capability' => 'manage_options',       
        'icon' => [
            'type' => 'icon',
            'name' => 'dashicons-admin-comments',
        ],        
        'position' => null,
    ],
    // Variabili di configurazione runtime
    'config' => [
    ],
    // Opzioni plugin salvate sul db
];
