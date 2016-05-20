<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ApplicationDetailsRefactoredController extends AbstractActionController
{
    /**
     * @var array
     */
    private $applicationDetails;

    /**
     * @param $applicationDetails
     */
    public function __construct(array $applicationDetails)
    {
        $this->applicationDetails = $applicationDetails;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel([
            'author' => $this->applicationDetails['application_author'],
        ]);
        return $viewModel->setTemplate('application/application-details/index.phtml');
    }
}
