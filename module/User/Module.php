<?php
namespace User;

use Zend\EventManager\EventInterface;
use MteBase\Module\AbstractModule;

class Module extends AbstractModule
{
    public function onBootstrap(EventInterface $e)
    {
        // form event example
        $events = $e->getApplication()->getEventManager()->getSharedManager();
        $events->attach('ZfcUser\Form\Register','init', function($e) {
            $form = $e->getTarget();
            $form->add(array(
                'name' => 'name',
                'options' => array(
                    'label' => 'Firstname/Lastname',
                ),
                'attributes' => array(
                    'type' => 'text'
                ),
            ));
        });
    }
}
