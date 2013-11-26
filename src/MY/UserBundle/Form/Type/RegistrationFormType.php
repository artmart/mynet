<?php

namespace MY\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);

    // add your custom field
    $builder->add('recaptcha', 'genemu_recaptcha');
    $builder->add('firstname');
    $builder->add('lastname');
    $builder->add('agree', 'checkbox', array());
  }

  public function getName()
  {
    return 'my_user_registration';
  }

}