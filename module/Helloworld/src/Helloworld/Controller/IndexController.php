<?php

namespace Helloworld\controller;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use Helloworld\Form\HelloworldForm;
use Helloworld\Model\Helloworld;

class IndexController extends AbstractActionController{
	
	public function indexAction(){
		echo "rtyrtyr";die;
		$views = new Viewmodel(array('text'=>'Hello world!'));
		return $views;
	}
	
	public function addAction()
	{	
		return new Helloworld(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));

		die;
		$form = new HelloworldForm();

		$form->get('submit')->setValue('Add');
	
		$request = $this->getRequest();
		if ($request->isPost()) {
			$album = new Helloworld();
			$form->setInputFilter($album->getInputFilter());
			$form->setData($request->getPost());
	
			if ($form->isValid()) {
				
				$album->exchangeArray($form->getData());
				$this->getAlbumTable()->saveAlbum($album);
				
	
				// Redirect to list of albums
				return $this->redirect()->toRoute('index');
			}
		}
		return array('form' => $form);
	}
	
}

