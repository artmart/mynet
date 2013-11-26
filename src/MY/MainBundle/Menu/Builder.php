<?php

//src/Acme/DemoBundle/Menu/Builder.php

namespace MY\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Translation\Translator;

class Builder extends ContainerAware
{
  
  /**
   * 
   * @param \Knp\Menu\FactoryInterface $factory
   * @param array $options
   * @return type
   */
  public function topMenu(FactoryInterface $factory, array $options)
  {
    $menu = $factory->createItem('root');
    $menu->setChildrenAttributes(array('id' => 'cssmenu')); 
    $request = $this->container->get('request');
    $menu->setCurrentUri($request->getRequestUri());

    $routeName = $request->get('_route');
    // get translator
    $tr = $this->container->get('translator');

    $homepage = $tr->trans('menutop.homepage');
    $menu->addChild($homepage, array('route' => 'homepage'));
    
    
    //
    $interesting = $tr->trans('menutop.interesting');
    $menu->addChild($interesting, array('uri' => '#'));
    
    $menu[$interesting]->addChild($tr->trans('menutop.mens'), array('route' => 'my_main_interesting_mens'));
    $menu[$interesting]->addChild($tr->trans('menutop.womens'), array('route' => 'my_main_interesting_womens'));
    $menu[$interesting]->addChild($tr->trans('menutop.kids'), array('route' => 'my_main_interesting_kids'));
    $menu[$interesting]->addChild($tr->trans('menutop.horoscope'), array('route' => 'my_main_interesting_horoscop'));
    //$menu[$interesting]->addChild($tr->trans('menutop.it'), array('route' => 'homepage'/*'my_main_interesting_its'*/));
    //$menu[$interesting]->addChild($tr->trans('menutop.useful'), array('route' => 'homepage'/*'my_main_interesting_usefuls'*/));
   
 
    $concurs = $tr->trans('menutop.concurs');
    $menu->addChild($concurs, array('uri' => '#'));
    
    $menu[$concurs]->addChild($tr->trans('menutop.new'), array('route' => 'my_main_concurs_concurs'));
   // $menu[$interesting]->addChild($tr->trans('menutop.womens'), array('route' => 'homepage'/*'my_main_interesting_womens'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.kids'), array('route' => 'homepage'/*'my_main_interesting_kids'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.horoscope'), array('route' => 'homepage'/*'my_main_interesting_horoscops'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.it'), array('route' => 'homepage'/*'my_main_interesting_its'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.useful'), array('route' => 'homepage'/*'my_main_interesting_usefuls'*/));
   
    $announce = $tr->trans('menutop.announce');
    $menu->addChild($announce, array('uri' => '#'));
    
    $menu[$announce]->addChild($tr->trans('menutop.news'), array('route' => 'my_main_main_news'));
  //  $menu[$interesting]->addChild($tr->trans('menutop.womens'), array('route' => 'homepage'/*'my_main_announce_womens'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.kids'), array('route' => 'homepage'/*'my_main_announce_kids'*/));
   // $menu[$interesting]->addChild($tr->trans('menutop.horoscope'), array('route' => 'homepage'/*'my_main_announce_horoscops'*/));
    //$menu[$interesting]->addChild($tr->trans('menutop.it'), array('route' => 'homepage'/*'my_main_announce_its'*/));
    //$menu[$interesting]->addChild($tr->trans('menutop.useful'), array('route' => 'homepage'/*'my_main_announce_usefuls'*/));
   
    $guide = $tr->trans('menutop.guide');
    $menu->addChild($guide, array('uri' => '#'));
    
    $menu[$guide]->addChild($tr->trans('menutop.legislation'), array('route' => 'my_main_realty_legislations'));
    $menu[$guide]->addChild($tr->trans('menutop.dealing'), array('route' => 'my_main_realty_dealings'));
    $menu[$guide]->addChild($tr->trans('menutop.registration'), array('route' => 'my_main_realty_registrations'));
   // $menu[$guide]->addChild($tr->trans('menutop.trading'), array('route' => 'homepage'/*'my_main_realty_tradings'*/));
    $menu[$guide]->addChild($tr->trans('menutop.rent'), array('route' => 'my_main_realty_rents'));
    $menu[$guide]->addChild($tr->trans('menutop.consultation'), array('route' => 'my_main_realty_consultations'));
    
    $contuctus = $tr->trans('menutop.contactus');
    $menu->addChild($contuctus, array('route' => 'contact_form'));
    return $menu;
  }
   
  /**
   * 
   * @param \Knp\Menu\FactoryInterface $factory
   * @param array $options
   * @return type
   */

  public function leftMenu1(FactoryInterface $factory, array $options)
  {
    $menu = $factory->createItem('root');
    $request = $this->container->get('request');
    $menu->setCurrentUri($request->getRequestUri());
    $routeName = $request->get('_route');
    // get translator
    $tr = $this->container->get('translator');

    $menu->addChild($tr->trans('menuleft1.aboutus'), array('route' => 'homepage'/*'ag_main_leftmenu_aboutuss'*/));
    $menu->addChild($tr->trans('menuleft1.goals'), array('route' => 'homepage'/*'ag_main_leftmenu_goals'*/));
    $menu->addChild($tr->trans('menuleft1.servicies'), array('route' => 'homepage'/*'ag_main_leftmenu_goals'*/));
    $menu->addChild($tr->trans('menuleft1.futureprograms'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));
    $menu->addChild($tr->trans('menuleft1.friends'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));
    $menu->addChild($tr->trans('menuleft1.history'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));
    $menu->addChild($tr->trans('menuleft1.contactus'), array('route' => 'contact_form'));
    return $menu;
  }
  
  /**
   * 
   * @param \Knp\Menu\FactoryInterface $factory
   * @param array $options
   * @return type
   */

  public function leftMenu2(FactoryInterface $factory, array $options)
  {
    $menu = $factory->createItem('root');
    $request = $this->container->get('request');
    $menu->setCurrentUri($request->getRequestUri());
    $routeName = $request->get('_route');
    // get translator
    $tr = $this->container->get('translator');

    $menu->addChild($tr->trans('menuleft2.gphoto'), array('route' => 'homepage'/*'ag_main_leftmenu_aboutuss'*/));
    $menu->addChild($tr->trans('menuleft2.gvideo'), array('route' => 'homepage'/*'ag_main_leftmenu_goals'*/));
    $menu->addChild($tr->trans('menuleft2.links'), array('route' => 'homepage'/*'ag_main_leftmenu_goals'*/));
    $menu->addChild($tr->trans('menuleft2.other'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));
    //$menu->addChild($tr->trans('menuleft2.history'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));

    return $menu;
  }
  
  
  /**
   * 
   * @param \Knp\Menu\FactoryInterface $factory
   * @param array $options
   * @return type
   */

  public function rightMenu(FactoryInterface $factory, array $options)
  {
    $menu = $factory->createItem('root');
    $request = $this->container->get('request');
    $menu->setCurrentUri($request->getRequestUri());
    $routeName = $request->get('_route');
    // get translator
    $tr = $this->container->get('translator');

    $menu->addChild($tr->trans('menuright.aboutus'), array('route' => 'homepage'/*'ag_main_main_aboutuss'*/));
    $menu->addChild($tr->trans('menuright.ourtreks'), array('route' => 'homepage' /* 'ag_main_photo_ourtreks'*/));
    $menu->addChild($tr->trans('menuright.futureprograms'), array('route' => 'homepage' /* 'ag_main_main_futureprograms'*/));
    $menu->addChild($tr->trans('menuright.contaktus'), array('route' => 'contact_form'));
    return $menu;
  }
}
