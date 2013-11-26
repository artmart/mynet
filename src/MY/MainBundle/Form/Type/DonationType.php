<?php

namespace MY\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DonationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('project', 'hidden', array('required' => false));
        $builder->add('name');
        $builder->add('surname');
        $builder->add('file', 'file', array('required' => false));
        $builder->add('company');
        $builder->add('country');
        $builder->add('city');
        $builder->add('address');
        $builder->add('phone');
        $builder->add('email', 'email');
        $builder->add('amount');
        $builder->add('agree', 'checkbox');
        $builder->add('private', 'checkbox', array('required' => false));
    }

    public function getName()
    {
        return 'donate';
    }
}