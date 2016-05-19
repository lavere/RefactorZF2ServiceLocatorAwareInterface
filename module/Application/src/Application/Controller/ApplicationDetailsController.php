<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\View\Model\ViewModel;

class ApplicationDetailsController extends AbstractActionController implements ServiceLocatorAwareInterface
{
    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $applicationDetails = $this->getServiceLocator()->getServiceLocator()->get('config')['application_details'];

        return new ViewModel([
            'author' => $applicationDetails['application_author'],
        ]);
    }
}
