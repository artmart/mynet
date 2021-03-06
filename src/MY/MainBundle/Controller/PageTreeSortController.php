<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class PageTreeSortController extends Controller
{

  /**
   * @Secure(roles="ROLE_SUPER_ADMIN")
   */
  public function upAction($page_id)
  {
    $em = $this->getDoctrine()->getEntityManager();
    $repo = $em->getRepository('MYMainBundle:News');
    $page = $repo->findOneById($page_id);
    
    return $this->redirect($this->getRequest()->headers->get('referer'));
  }

  /**
   * @Secure(roles="ROLE_SUPER_ADMIN")
   */
  public function downAction($page_id)
  {
    $em = $this->getDoctrine()->getEntityManager();
    $repo = $em->getRepository('MYMainBundle:News');
    $page = $repo->findOneById($page_id);
    
    return $this->redirect($this->getRequest()->headers->get('referer'));
  }

}