<?php

namespace MY\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('phone');
        $builder->add('note');
        $builder->add('file');
        $builder->add('recaptcha', 'genemu_recaptcha');
    }

    public function getName()
    {
        return 'application';
    }
}