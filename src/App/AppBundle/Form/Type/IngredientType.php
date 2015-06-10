<?php

namespace App\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IngredientType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text')
        ->add('save','submit');
    }

    public function getName()
    {
        return 'ingredient';
    }

}