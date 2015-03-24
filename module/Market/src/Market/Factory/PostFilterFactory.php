<?php

namespace Market\Factory;

/**
 * Description of PostFilterFactory
 *
 * @author ennio
 */
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Form\PostFilter;

class PostFilterFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $sm)
    {
        $filter = new PostFilter();
        $filter->setCategories($sm->get('application-categories'));
        $filter->setExpireDays($sm->get('market-expire-days'));
        $filter->buildFilter();
        return $filter;
    }

}