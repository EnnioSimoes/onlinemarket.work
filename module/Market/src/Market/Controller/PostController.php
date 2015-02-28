<?php
namespace Market\Controller;

/**
 * Description of PostController
 *
 * @author ennio
 */
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController{
    public $categories;
    
    public function setCategories($categories) 
    {
        $this->categories = $categories;
    }
    
    public function indexAction() 
    {
        return new ViewModel(array('categories' => $this->categories));
    }
}
