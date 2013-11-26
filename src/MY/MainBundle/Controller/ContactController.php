<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MY\MainBundle\Form\Type\ContactFormType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{

  /**
   * @Route("/contact/sent/", name="_sent")
   * @Template()
   */
  public function sentAction()
  {   
    return array();
  }
  
  /**
   * @Route("/contact/not_sent/", name="_not_sent")
   * @Template()
   */
  public function notSentAction()
  {   
    $form2 = $this->get('form.factory')->create(new ContactFormType());
    
    return array('form2' => $form2->createView());
  }

  /**
   * @Route("/contact/form/", name="contact_form")
   * @Template()
   */
  public function indexAction()
  {

    $form2 = $this->get('form.factory')->create(new ContactFormType());

    $request = $this->get('request');
    if ('POST' == $request->getMethod())
    {
      $form2->bindRequest($request);
      if ($form2->isValid())
      {
        $mailer = $this->get('mailer');

        $subject = $form2['subject']->getData();
        $email = $form2['email']->getData();
        $themessage = $form2['message']->getData();

        $recipients = $this->container->getParameter('mail_list');
        
        $message = \Swift_Message::newInstance()
                        ->setSubject($subject)
                        ->setFrom($email)
                        ->setTo($recipients)
                        ->setBody($themessage);
        
        $this->get('mailer')->send($message);

        return new RedirectResponse($this->generateUrl('_sent'));
      }
      else
      {
        return new RedirectResponse($this->generateUrl('_not_sent'));
      }
    }
    $em = $this->getDoctrine()->getEntityManager();
    $rightads = $em->getRepository('MYMainBundle:Ads')->findRightAds();
    return array('form2' => $form2->createView(), 'rightads' => $rightads);
  }

}