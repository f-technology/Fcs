<?php
namespace Application;

use MteBase\Module\AbstractModule;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module extends AbstractModule
{    
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach(
            $e->getApplication()->getEventManager()
        );
    }
}
