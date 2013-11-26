<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class MainController extends Controller
{

  /**
   *
   * @Route("/")
   * @Template()
   * @Cache(smaxage="3600")
   */
  public function indexAction()
  { 
    $em = $this->getDoctrine()->getEntityManager();
    
    //$ad = $em->getRepository('YitAdsBundle:Ads')->findOneBy(array('domain' => 'homepage'));
   // $ad_content = $ad->getContents()->getContent();
    
    
   // $events = $em->getRepository('MYMainBundle:Event')->findAllHomepageEvents();
  //  $events_categorys = $em->getRepository('MYMainBundle:EventCategory')->findAllCategories();
    
    $news = $em->getRepository('MYMainBundle:News')->findAllHomepageNews();
    $sliders = $em->getRepository('MYMainBundle:Slider')->findAll();
    $rightads = $em->getRepository('MYMainBundle:Ads')->findRightAds();
    $leftads = $em->getRepository('MYMainBundle:Ads')->findLeftAds();
    return array('news' => $news, /*'events' => $events, 'events_categorys' => $events_categorys,*/ 'sliders' => $sliders, 'rightads' => $rightads, 'leftads'=>$leftads);
  }
   
  /**
   * @Route("/news/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function newsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();

    $news = $em->getRepository('MYMainBundle:News')->findAllNews();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $news, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    
    $leftads = $em->getRepository('MYMainBundle:Ads')->findLeftAds();
    $rightads = $em->getRepository('MYMainBundle:Ads')->findRightAds();
    return array('page' => 'news', 'pagination' => $pagination,  'rightads' => $rightads, 'leftads'=>$leftads);
  }

  /**
   * @Route("/news/archive/", name="my_news_archive")
   * @Template("MYMainBundle:Main:news.html.twig")
   * @Cache(smaxage="600")
   */
  public function newsArchiveAction()
  {
    $em = $this->getDoctrine()->getEntityManager();

    $info = $em->getRepository('MYMainBundle:News')->findAllNewsArchive();


    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $info, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    //return array('pagination' => $pagination);

    return array('info' => $info, 'page' => 'news', 'pagination' => $pagination);
  }

  /**
   * @Route("/news/{slug}/", name="my_news_detailed")
   * @Template()
   * @Cache(smaxage="600")
   */
  public function newsDetailedAction($slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $info = $em->getRepository('MYMainBundle:News')->findOneBySlug($slug);

    // For 404
    if (empty($info))
    {
      throw $this->createNotFoundException('Page not found!');
    }

    return array('info' => $info, 'page' => 'news', 'slug' => $slug);
  }

  

  /**
   * @Route("/gallery/{type}/", name="my_gallery")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function galleryAction($type)
  {
    $em = $this->getDoctrine()->getEntityManager();
    $galleries = $em->getRepository('MYMainBundle:Gallery')->findAllByType($type);

    return array('type' => $type, 'galleries' => $galleries);
  }

  /**
   * @Route("/gallery/{type}/{slug}/", name="my_gallery_more")
   * @Template()
   * @Cache(smaxage="3600")
   */
  public function galleryMoreAction($type, $slug)
  {
    $em = $this->getDoctrine()->getEntityManager();
    $gallery = $em->getRepository('MYMainBundle:Gallery')->findOneBySlug($slug);

    // For 404
    if (empty($gallery))
    {
      throw $this->createNotFoundException('Page not found!');
    }
  
    return array('page' => 'gallery', 'type' => $type, 'slug' => $slug, 'info' => $gallery);
  }
  
}