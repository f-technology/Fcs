<?php

return array(
    'modules' => array(
        'Application',
		'ZfcUser',
    	'DoctrineORMModule',
		'ZfcUserDoctrineORM'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
