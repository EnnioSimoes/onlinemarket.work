<?php

namespace Market\Form;

/**
 * Description of PostFormFilter
 *
 * @author ennio
 */
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
use Zend\Validator\Regex;

class PostFilter extends InputFilter{
    private $categories;
    
    public function setCategories($categories) 
    {
        $this->categories = $categories;
    }

    public function buildFilter() {
        $categary = new Input('category');
        $categary->getFilterChain()
                ->attachByName('StringTrim')  //Remove espeços
                ->attachByName('StripTags')  //Remove scripts
                ->attachByName('StringToLower');  //caixa baixa
        
        $categary->getValidatorChain()
                ->attachByName('InArray', array('haystack'=>  $this->categories));

        $title = new Input('title');
        $title->getFilterChain()
                ->attachByName('StringTrim')  //Remove espeços
                ->attachByName('StripTags');  //Remove scripts
        
        $titleRegex = new Regex(array('pattern'=>'/^[a-zA-Z0-9 ]*$/'));
        $titleRegex->setMessage('O título só pode conter numeros, letras ou espaços');
        
        $title->getValidatorChain()
                ->attach($titleRegex)
                ->attachByName('StringLength', array('min'=>1, 'max'=>128));
    
        $this->add($categary)
                ->add($title);
        
        
    }

}
