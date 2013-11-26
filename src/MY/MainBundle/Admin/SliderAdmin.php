<?php

namespace MY\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

/**
 * 
 */
class SliderAdmin extends Admin
{

  /**
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   * @return void
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
            ->addIdentifier('name')
            ->add('_action', 'actions', array('actions' => array(
                    'edit' => array(),
                    'delete' => array()
                    )));
  }

  /**
   * 
   * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
   * @return void
   */
  protected function configureFormFields(FormMapper $formMapper)
  {
    $languages = $this->configurationPool->getContainer()->getParameter('languages');

    $formMapper
            ->with('General')
            ->add('name', null, array('label' => 'name'))
            ->end()
            ->with('Media')
              ->add('image', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'slider')))
            ->end()
            ;
  }

  /**
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   * @return void
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
            ->add('name');
  }

}