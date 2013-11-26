<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class ConcursController extends Controller
{
  /**
   * @Route("/concurs/")
   * @Template()
   * @Cache(smaxage="0")
   */
  public function concursAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $items = $em->getRepository('MYMainBundle:Concurs')->findAllConcurs();

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $items, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );
    return $this->render('MYMainBundle:Concurs:concurs.html.twig', array('items' => $pagination));
    //return array('page' => 'news', 'pagination' => $pagination);
  }



  /**
   * @Route("/concurs/{slug}/")
   * @Template()
   * @Cache(smaxage="600")
   */
  public function DetailedAction($slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $item = $em->getRepository('MYMainBundle:Concurs')->findOneBySlug($slug);

    // For 404
    if (empty($item))
    {
      throw $this->createNotFoundException('Page not found!');
    }
    return $this->render('MYMainBundle:Concurs:detailed.html.twig', array('item' => $item, 'slug' => $slug));
    //return array('info' => $info, 'page' => 'news', 'slug' => $slug);
  }
}