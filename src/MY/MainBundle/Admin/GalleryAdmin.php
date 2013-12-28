<?php
namespace MY\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class GalleryAdmin extends Admin
{
    /**
     *
     * @var array
     */
    private $types = array('1' => 'Photos', '2' => 'Videos');

		protected $datagridValues = array(
				'_page' => 1,
				'_sort_order' => 'DESC', // sort direction
				'_sort_by' => 'created' // field name
		);
    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label' => 'ID'))
            ->add('event_cat_id', null, array('label' => 'Event Category'))
            ->add('title', null, array('label' => 'Title'))
            ->add('content', null, array('label' => 'Content'))
            ->add('slug', null, array('label' => 'Slug'))
            ->add('created', null, array('label' => 'Created'))
            ->add('updated', null, array('label' => 'Updated'));
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
            ->addIdentifier('name')
            ->add('created', null, array('label' => 'Created'))
            ->add('updated', null, array('label' => 'Updated'))
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
                ->add('name')
                ->add('type','choice',array('choices'=>$this->types))
                ->add('slug', null, array('required' => false))
                ->add('image', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'default', 'provider' => 'sonata.media.provider.image')))
                ->add('gallery')
            ->end()
            /*->with('Translations')
            ->add('translations', 'a2lix_translations', array(
                'by_reference' => false,
                'locales' => array_keys($languages)
            ))
            ->end()*/
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
            ->add('name');
    }
}