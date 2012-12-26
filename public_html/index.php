<?php
chdir(dirname(__DIR__));
require_once 'init_autoloader.php';

Zend\Mvc\Application::init(
require_once 'config/application.config.php'
)->run()->send();
