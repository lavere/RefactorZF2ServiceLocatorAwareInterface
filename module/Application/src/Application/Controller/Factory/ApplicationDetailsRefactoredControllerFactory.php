<?php

namespace Application\Controller\Factory;

use Application\Controller\ApplicationDetailsRefactoredController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ApplicationDetailsRefactoredControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerLocator)
    {
        /**
         * @var ServiceLocatorInterface $serviceLocator
         */
        $serviceLocator = $controllerLocator->getServiceLocator();

        return new ApplicationDetailsRefactoredController(
            $serviceLocator->get('config')['application_details']
        );
    }
}