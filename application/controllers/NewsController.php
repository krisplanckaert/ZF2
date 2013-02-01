<?php

class NewsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $form = new Application_Form_News();
        $this->view->form  = $form;
        //Zend_Debug::dump($form);
        
        if ($this->getRequest()->isPost()) { 
            $postParams= $this->getRequest()->getPost();  // alle post parameters in een variabele stoppen
            if ($this->view->form->isValid($postParams)){ 
                
                // controle of alle velden correct zijn volgens de validator
                var_dump($postParams);exit;
               
            } else {
                die('not valid???');
            }  
            
            //$this->view->form->populate($postParams); zf 1.12 doet dit reeds zelf
            
        }
        
    }


}


