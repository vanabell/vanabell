<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	
    }

    public function indexAction()
    {
        // action body
    	//$this->_helper->layout->disableLayout();
    }

    public function aboutAction()
    {
    	// action body
    	$model = new Application_Model_AboutModel();
    	$getall = $model->getAllAbout();
    	$this->view->data = $getall;
    }
    
    public function newsAction()
    {
        //$this->_helper->layout->setLayout('layout2');
        // action body
    }
    
    public function galeryAction()
    {
    	//$this->_helper->layout->setLayout('layout2');
    	// action body
    }
    
    public function contactusAction()
    {
        //$this->_helper->layout->setLayout('layout2');
        // action body
    }
    
    

}

