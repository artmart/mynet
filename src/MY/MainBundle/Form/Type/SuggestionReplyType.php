<?php

namespace MY\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SuggestionReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subject');
        $builder->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contactform';
    }
}