<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Market\Controller;

/**
 * Description of IndexController
 *
 * @author ennio
 */
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
    public function indexAction() {
        return new ViewModel();
    }
    
    public function fooAction() {
        return new ViewModel();
    }
}
