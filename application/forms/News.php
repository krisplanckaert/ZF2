<?php

class Application_Form_News extends Zend_Form {
   
    public function init(){
        // set the defaults
        $this->setMethod(Zend_Form::METHOD_POST);        
        //$this->setAttrib('enctype', 'multiparts/form-data');
        $this->setAttrib('enctype', Zend_Form::ENCTYPE_MULTIPART);
        
        // element title
        $this->addElement(new Zend_Form_Element_Text('title',array(
            'label'=>"Title",
            'required'=>false,
            // filters
            'filters' => array('StringTrim')
            )));
       
        // element teaser
        $this->addElement(new Zend_Form_Element_Text('teaser',array(
            'label'=>"Teaser",
            'required'=>true,
            // filters
            'filters' => array('StringTrim'),
            'validators' => array( array('StringLength',true, array('max'=>255)))
            )));
        
        // element Description
        $this->addElement(new Zend_Form_Element_Textarea('description',array(
            'label'=>"Description",
            'required'=>true,
            // filters
            'filters' => array('StringTrim', 'StripTags'),
            'validators'=>array(),
            )));
        
         // element Submit
        $this->addElement(new Zend_Form_Element_Button('knop', array(
            'type'=>"submit",
            'value'=>'knop',
            'required'=> false,
            'ignore'=> true
            )));
        
    }
    
}

?>

