<?php


namespace Market\Controller;

/**
 * Description of ViewController
 *
 * @author ennio
 */
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ViewController extends AbstractActionController{
    
    public function indexAction() {
        return new ViewModel(array('category' => 'category postings'));
    }
}
