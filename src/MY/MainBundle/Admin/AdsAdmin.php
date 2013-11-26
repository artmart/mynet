<?php
namespace MY\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class AdsAdmin extends Admin
{
  
    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label' => 'Id'))
            ->add('title', null, array('label' => 'Title'))
            ->add('ads', null, array('label' => 'Ads'));
    }

    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('title')
            ->add('_action', 'actions', array('actions' => array(
                'view' => array(),
                'edit' => array(),
                'delete' => array()
            )));
    }

    /**
     * Конфигурация формы редактирования записи
     * 
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $languages = $this->configurationPool->getContainer()->getParameter('languages');
        
        $formMapper
            ->with('General')
                ->add('title', 'text', array('required' => false))
                //->add('ads', null, array('required' => false) )
                ->add('link', 'text', array('label' => 'link-am', 'required' => false))
                ->add('order_id', 'number', array('label' => 'Order', 'required' => false))
                ->add('position', 'choice', array('label' => 'Position', 'choices' => array('0' =>' ', '1'=>'Leftside', '2'=>'Rightside', '3'=>'Mainpage', 'required' => false)))
            ->end()
            ->with('Media')
              ->add('image', 'sonata_type_model_list', array('label' => 'media-am', 'required' => true), array('link_parameters' => array('context' => 'ads')))
            ->end()
        ;
    }
    /**
     * Поля, по которым производится поиск в списке записей
     *
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('title');
    }
}