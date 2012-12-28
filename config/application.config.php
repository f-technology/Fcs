<?php

return array(
    'modules' => array(
        'MteBase',
        'Application',
        'DoctrineModule',
        'DoctrineORMModule',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'User',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_cache_enabled' => false,
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
