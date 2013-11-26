<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class InterestingController extends Controller
{  
  //Mens
    
  /**
   * @Route("/mens/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function mensAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Interestings')->findAllMens();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Interesting:interestings.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }



  /**
   * @Route("/detiled/{slug}/")
   * @Template()
   * @Cache(smaxage="600")
   */
  public function DetailedAction($slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $item = $em->getRepository('MYMainBundle:Interestings')->findOneBySlug($slug);

    // For 404
    if (empty($item))
    {
      throw $this->createNotFoundException('Page not found!');
    }
    return $this->render('MYMainBundle:Interesting:detailed.html.twig', array('item' => $item, 'slug' => $slug));
    //return array('info' => $info, 'page' => 'news', 'slug' => $slug);
  }
  
  //Womens
  
  /**
   * @Route("/womens/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function womensAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Interestings')->findAllWomens();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Interesting:interestings.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }

  
  //Kids
  
  /**
   * @Route("/kids/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function kidsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Interestings')->findAllKids();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Interesting:interestings.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }

  
//Horoscop
  
/**
   * @Route("/horoscop/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function horoscopAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Horoscop')->findAllHoroscops();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Interesting:horoscop.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
  
  /**
   * @Route("/detiledHoroscop/{slug}/")
   * @Template()
   * @Cache(smaxage="600")
   */
  public function detailedHoroscopAction($slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $item = $em->getRepository('MYMainBundle:Horoscop')->findOneBySlug($slug);

    // For 404
    if (empty($item))
    {
      throw $this->createNotFoundException('Page not found!');
    }
    return $this->render('MYMainBundle:Interesting:detailed.html.twig', array('item' => $item, 'slug' => $slug));
    //return array('info' => $info, 'page' => 'news', 'slug' => $slug);
  }
  
  
}