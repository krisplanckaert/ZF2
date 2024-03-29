<?php
class Syntra_Controller_Plugin_Navigation extends Zend_Controller_Plugin_Abstract
{
    /**
     * 
     * @param \Zend_Controller_Request_Abstract $request
     * @return \Zend_Navigation
     */
    public function preDispatch(\Zend_Controller_Request_Abstract $request) {
        
        // make navigation
        $container = new Zend_Navigation();
        
        $urls = array(
            array('label' => 'Home', 'action' => 'index', 'controller' => 'index' ,'params' => array()),
            array('label' => 'Producten', 'action' => 'producten', 'controller' => 'index' ,'params' => array()),
            array('label' => 'Contact', 'action' => 'index', 'controller' => 'Contact' ,'params' => array()),
            array('label' => 'News', 'action' => 'index', 'controller' => 'News' ,'params' => array()),
            array('label' => 'Sitemap', 'action' => 'sitemap', 'controller' => 'index' ,'params' => array()),
        );    
            
        foreach($urls as $url) {
            $page = new Zend_Navigation_Page_Mvc(array(
               'label'      => $url['label'], 
               'action'     => $url['action'], 
               'controller' => $url['controller'], 
               'route'      => 'default', 
               'params'     => $url['params'], 
            ));
            $container->addPage($page);
        }
        Zend_registry::set('Zend_Navigation' ,$container);
        return $container;
                
    }
}
