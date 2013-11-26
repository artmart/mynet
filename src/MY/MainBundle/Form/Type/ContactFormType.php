<?php

namespace MY\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subject', 'textarea');
        $builder->add('email', 'email');
        $builder->add('message', 'textarea');
        $builder->add('recaptcha', 'genemu_recaptcha');
    }

    public function getName()
    {
        return 'contactform';
    }
}