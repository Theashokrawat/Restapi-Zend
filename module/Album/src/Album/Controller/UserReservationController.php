<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Model\News;          // <-- Add this import
use Album\Form\NewsForm;       // <-- Add this import

class UserReservationController extends AbstractActionController
{
    
    protected $newsTable;
    public function getNewsTable()
    {
        if (!$this->newsTable) {
            $sm = $this->getServiceLocator();
            $this->newsTable = $sm->get('Album\Model\NewsTable');
        }
        return $this->newsTable;
    }

    public function indexAction()
    {        
        return new ViewModel(array(
            'news' => $this->getNewsTable()->fetchAll(),
        ));
    }
    
}