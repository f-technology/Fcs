<?php

return array(
    'router' => array(
        'routes' => array(
            'zfcuser' => array(
                'options' => array(
                    'route' => '/member',
                ),
                'child_routes' => array(
                    'login' => array(
                        'options' => array(
                            'route' => '/signin',
                        ),
                    ),
                    'logout' => array(
                        'options' => array(
                            'route' => '/signout',
                        ),
                    ),
                    'register' => array(
                        'options' => array(
                            'route' => '/signup',
                        ),
                    ),
                ),
            ),
        ),
    ),
);