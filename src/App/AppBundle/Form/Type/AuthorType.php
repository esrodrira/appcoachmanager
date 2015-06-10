<?php

namespace App\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AuthorType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text')
        ->add('surname','text')
        ->add('years','text')
        ->add('prueba','text',array('label' => 'Campo','required' => false))
        ->add('save','submit',array('label' => 'Crea autor'));
    }

    public function getName()
    {
        return 'author';
    }

}
