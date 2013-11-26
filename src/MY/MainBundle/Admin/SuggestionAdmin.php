<?php

namespace MY\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

/**
 * Description of AdAdmin
 *
 * @author Artak Martirosyan <artrmart@gmail.com>
 */
class SuggestionAdmin extends Admin
{

  /**
   * {@inheritdoc}
   */
  protected function configureRoutes(RouteCollection $collection)
  {
    $collection->add('suggestion_order', 'suggestion_order');
    $collection->add('reply', 'reply');
  }

  protected $datagridValues = array(
      '_page' => 1,
      '_sort_order' => 'DESC', // sort direction
      '_sort_by' => 'created_at' // field name
  );
  public $statuses = array('1' => "OK", '2' => 'Unchecked', '3' => 'Deny');

//  public $supportsPreviewMode = true;
//
//  public function getTemplate($title)
//  {
//    switch ($title)
//    {
//      case 'preview':
//        return 'MYMainBundle:Admin:preview.html.twig';
//        break;
//      default:
//        return parent::getTemplate($title);
//        break;
//    }
//  }

  /**
   * Configure the list
   *
   * @param \Sonata\AdminBundle\Datagrid\ListMapper $list list
   */
  protected function configureListFields(ListMapper $list)
  {
    $list
            ->addIdentifier('name')
            ->add('status')
            ->add('likes')
            ->add('in_homepage')
            ->add('in_top')
            ->add('in_discussion')
            ->add('archive')
            ->add('created_at')
            ->add('_action', 'actions', array('actions' => array(
                    'edit' => array(),
                    'show' => array('template' => 'MYMainBundle:Suggestion:admin_show_action.html.twig'),
                    'reply' => array('template' => 'MYMainBundle:Suggestion:admin_reply_action.html.twig'),
                    )));
    ;
  }

  /**
   * Configure the form
   *
   * @param FormMapper $formMapper formMapper
   */
  public function configureFormFields(FormMapper $formMapper)
  {
    $languages = $this->configurationPool->getContainer()->getParameter('languages');


    $formMapper
            ->with('General')
            ->add('user')
            ->add('name')
            ->add('slug', null, array('required' => false))
            ->add('status', 'choice', array('choices' => $this->statuses))
            ->add('likes')
            ->add('title_raw', null, array('help' => 'Added by user'))
            ->add('suggestion_raw', null, array('help' => 'Added by user'))
            ->add('solution_raw', null, array('help' => 'Added by user'))
            ->add('position', null, array('required' => false))
            ->add('created_at')
            ->add('in_homepage', null, array('required' => false))
            ->add('in_top', null, array('required' => false))
            ->add('in_discussion', null, array('required' => false, 'label' => 'Contest'))
            ->add('archive', null, array('required' => false, 'label'=>'Discussion'))
            ->end()
            ->with('Form')
            ->add('show_contact', 'checkbox', array('label' => 'Add the contact form?', 'required' => false,))
            ->add('show_application', 'checkbox', array('label' => 'Add the application form?', 'required' => false,))
            ->end()
            ->with('Translations')
            ->add('translations', 'a2lix_translations', array(
                'by_reference' => false,
                'locales' => array_keys($languages)))
            ->end()
            ->with('Media')
            ->add('image', 'sonata_type_model', array('required' => false), array('link_parameters' => array('context' => 'suggestion')))
            ->add('image_slide', 'sonata_type_model', array('required' => false), array('link_parameters' => array('context' => 'suggestion')))
            ->end()
            ->add('file', 'file', array('required' => false, 'label' => 'User uploaded picture'))
            ->add('user_uploaded', 'checkbox', array('required' => false, 'label' => 'Use user uploaded picture?'))
            ->end()
            ->with('Edited')
            ->add('edited', 'choice', array('required' => false, 'choices' => $languages, 'multiple' => true, 'expanded' => true))
            ->end()
            ->with('Translated')
            ->add('translated', 'choice', array('required' => false, 'choices' => $languages, 'multiple' => true, 'expanded' => true))
            ->end()
            ->with('Corrected')
            ->add('corrected', 'choice', array('required' => false, 'choices' => $languages, 'multiple' => true, 'expanded' => true))
            ->end()
    ;
  }

  /**
   * 
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   */
  public function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
            ->add('user')
            ->add('status', 'doctrine_orm_choice', array(), 'choice', array('choices' => $this->statuses))
            ->add('likes')
            ->add('slug')
            ->add('title_raw')
            ->add('suggestion_raw')
            ->add('solution_raw')
            ->add('in_homepage')
            ->add('in_top')
            ->add('in_discussion')
            ->add('archive')
            ->add('created_at')
    ;
  }

  public function configureShowFields(ShowMapper $filter)
  {
    parent::configureShowFields($filter);
    $filter
            ->add('user')
            ->add('status', 'doctrine_orm_choice', array(), 'choice', array('choices' => $this->statuses))
            ->add('likes')
            ->add('slug')
            ->add('title_raw')
            ->add('suggestion_raw')
            ->add('solution_raw')
            ->add('in_homepage')
            ->add('in_top')
            ->add('in_discussion')
            ->add('archive')
            ->add('created_at')
    ;
  }

}