<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class RealtyController extends Controller
{
    
 //Legislation
    
  /**
   * @Route("/legislations/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function legislationsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Realty')->findAllLegislations();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Realty:realty.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
  
  //Dialings
  
  /**
   * @Route("/dealings/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function dealingsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Realty')->findAllDealings();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Realty:realty.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
 
  //Registrations
  
  /**
   * @Route("/registrations/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function registrationsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Realty')->findAllRegistrations();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Realty:realty.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
  
 //Rent
  
  /**
   * @Route("/rents/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function rentsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Realty')->findAllRents();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Realty:realty.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
   
  //Consultation
  
  /**
   * @Route("/consultations/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function consultationsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Realty')->findAllConsultations();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Realty:realty.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }
   
//////Detailed Action  
  
  /**
   * @Route("/detailed/{slug}/")
   * @Template()
   * @Cache(smaxage="600")
   */
  public function detailedAction($slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $item = $em->getRepository('MYMainBundle:Realty')->findOneBySlug($slug);

    // For 404
    if (empty($item))
    {
      throw $this->createNotFoundException('Page not found!');
    }
    return $this->render('MYMainBundle:Realty:detailed.html.twig', array('item' => $item, 'slug' => $slug));
    //return array('info' => $info, 'page' => 'news', 'slug' => $slug);
  }
  

}