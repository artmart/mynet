<?php

namespace MY\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

class NewsAdmin extends Admin {

  protected $datagridValues = array(
      '_page' => 1,
      '_sort_order' => 'DESC', // sort direction
      '_sort_by' => 'created' // field name
  );

  /**
   * Row show configuration
   *
   * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
   * @return void
   */
  protected function configureShowField(ShowMapper $showMapper) {
    $showMapper
            ->add('id', null, array('label' => 'ID'))
            ->add('title', null, array('label' => 'Title'))
            ->add('news_status', null, array('label' => 'News Status'))
            ->add('news_date', 'date', array('label' => 'News Date', 'format' => 'yyyy-MM-dd','widget' => 'single_text'))
            ->add('content', null, array('label' => 'Content'))
            ->add('slug', null, array('label' => 'Slug'))
            ->add('created', null, array('label' => 'Created'))
            ->add('updated', null, array('label' => 'Updated'));
  }

  /**
   * List show configuration
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
   * @return void
   */
  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
            ->addIdentifier('title', null, array('label' => 'Title'))
            ->addIdentifier('name')
            ->addIdentifier('news_status', null, array('label' => 'News Status'))
            ->addIdentifier('homepage_status', null, array('label' => 'Homepage Status'))
            ->add('news_date', 'date', array('label' => 'News Date', 'format' => 'yyyy-MM-dd','widget' => 'single_text'))
            ->add('slug')
            //->add('created', null, array('label' => 'Created'))
            //->add('updated', null, array('label' => 'Updated'))
            ->add('_action', 'actions', array('actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array()
                    )));
  }

  /**
   * Row form edit configuration
   * 
   * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
   * @return void
   */
  protected function configureFormFields(FormMapper $formMapper) {
    $languages = $this->configurationPool->getContainer()->getParameter('languages');

    $formMapper
            ->with('General')
            ->add('name')
            ->add('slug', null, array('required' => false))
            ->add('news_date', 'date', array('widget' => 'choice', 'required' => false))
            ->add('news_status', 'choice', array('choices' => array('1' => 'On', '0' => 'Off'),'required' => true))
            ->add('homepage_status', 'choice', array('choices' => array('1' => 'On', '0' => 'Off')))
            ->add('short_content', 'ckeditor')
            ->add('content', 'ckeditor')
            ->add('image', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'default', 'provider' => 'sonata.media.provider.image')))
            ->add('gallery', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'news_gallery')))
            ->end()
            /*->with('Translations')
            ->add('translations', 'a2lix_translations', array(
                'by_reference' => false,
                'locales' => array_keys($languages),
                'fields' => array(
                    'content' => array(
                        'type' => 'ckeditor'
                    ),
                    'short_content' => array(
                        'type' => 'ckeditor'
                    )
                )
            ))
            ->end()*/
    ;
  }

  /**
   * Fields in list rows search
   *
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   * @return void
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
            ->add('name')
            ->add('title', null, array('label' => 'Title'))
            ->add('slug');
  }

}