<?php

namespace MY\MediaBundle\Admin\ORM;

use Sonata\MediaBundle\Admin\BaseMediaAdmin as Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\MediaBundle\Provider\Pool;
use Sonata\MediaBundle\Form\DataTransformer\ProviderDataTransformer;
use Knp\Menu\ItemInterface as MenuItemInterface;
use MY\MediaBundle\Controller\MediaAdminController as BaseController;
use Symfony\Component\Form\FormView;
use Sonata\AdminBundle\Show\ShowMapper;

class MediaAdmin extends Admin {

  
  /**
   * {@inheritdoc}
   */
  protected function configureRoutes(RouteCollection $collection) {
    $collection->add('sonata.media.admin.media.view', $this->getRouterIdParameter() . '/view');
    $collection->add('watermark', $this->getRouterIdParameter() . '/watermark');
  }
  
  protected $datagridValues = array(
      '_page' => 1,
      '_sort_order' => 'DESC', // sort direction
      '_sort_by' => 'id' // field name
  );

  /**
   * {@inheritdoc}
   */
  protected function configureSideMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null) {

    if (!in_array($action, array('edit', 'view'))) {
      return;
    }

    $admin = $this->isChild() ? $this->getParent() : $this;

    $id = $this->getRequest()->get('id');

    $menu->addChild(
            $this->trans('sidemenu.link_edit_media'), array('uri' => $admin->generateUrl('edit', array('id' => $id)))
    );

    $menu->addChild(
            $this->trans('sidemenu.link_media_view'), array('uri' => $admin->generateUrl('view', array('id' => $id)))
    );

//    $menu->addChild(
//            $this->trans('Add Watermark'), array('uri' => $admin->generateUrl('watermark', array('id' => $id)))
//    );
  }

  /**
   * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
   * @return void
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
            ->add('name')
            ->add('providerReference')
            ->add('enabled')
            ->add('context')
    ;

    $providers = array();

    $providerNames = (array) $this->pool->getProviderNamesByContext($this->getPersistentParameter('context', $this->pool->getDefaultContext()));
    foreach ($providerNames as $name) {
      $providers[$name] = $name;
    }

    $datagridMapper->add('providerName', 'doctrine_orm_choice', array(
        'field_options' => array(
            'choices' => $providers,
            'required' => false,
            'multiple' => false,
            'expanded' => false,
        ),
        'field_type' => 'choice',
    ));
  }

  /**
   * {@inheritdoc}
   */
  protected function configureFormFields(FormMapper $formMapper) {
    $media = $this->getSubject();

    if (!$media) {
      $media = $this->getNewInstance();
    }

    if (!$media || !$media->getProviderName()) {
      return;
    }

    //$formMapper->getFormBuilder()->appendNormTransformer(new ProviderDataTransformer($this->pool));
    $formMapper->getFormBuilder()->addModelTransformer(new ProviderDataTransformer($this->pool, $this->getClass()), true);
    
    $provider = $this->pool->getProvider($media->getProviderName());

    if ($media->getId()) {
      {
      $formMapper->add('in_homepage', 'checkbox', array('label' => 'Add to homepage?', 'required' => false));
      }
      $provider->buildEditForm($formMapper);
    } else {
      if ($provider->getName() == 'sonata.media.provider.youtube')
      {
      $formMapper->add('in_homepage', 'checkbox', array('label' => 'Add to homepage?', 'required' => false));
      }
      $provider->buildCreateForm($formMapper);
    }
  }

}