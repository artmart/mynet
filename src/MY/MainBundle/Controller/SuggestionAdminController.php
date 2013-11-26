<?php

namespace MY\MainBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use MY\MainBundle\Entity\Suggestion;
use MY\MainBundle\Form\Type\SuggestionReplyType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MY\MainBundle\Entity\EmailTemplate;
use MY\MainBundle\Entity\SentMessages;

/**
 * Description of ProjectAdminController
 *
 * 
 */
class SuggestionAdminController extends Controller
{

  public function SuggestionOrderAction()
  {
    $em = $this->getDoctrine()->getEntityManager();

    $suggestions = $em->getRepository('MYMainBundle:Suggestion')->findAllByForUpdate();

    //For order
    foreach ($suggestions as $a_suggestion)
    {
      $slug = $a_suggestion->getSlug();

      $url = 'https://api.facebook.com/method/fql.query?query=select%20total_count,%20commentsbox_count%20from%20link_stat%20where%20url%20=%20%22http://mynet.am/am/suggestion/' . $slug . '/%22';
      
      $xml = simplexml_load_file($url);
      
      $total_count = (string) $xml->link_stat->total_count;
      $commentsbox_count = (string) $xml->link_stat->commentsbox_count;
      
      $total = $commentsbox_count + $total_count;
      
      $a_suggestion->setLikes($total);
      $em->persist($a_suggestion);
      $em->flush();

      $this->get('session')->setFlash('sonata_flash_success', $this->get('translator')->trans('Suggestions Order Updated'));
    }

    if (false === $this->admin->isGranted('LIST'))
    {
      throw new AccessDeniedException();
    }

    $datagrid = $this->admin->getDatagrid();
    $formView = $datagrid->getForm()->createView();

    // set the theme for the current Admin Form
    $this->get('twig')->getExtension('form')->renderer->setTheme($formView, $this->admin->getFilterTheme());

    return $this->redirect('list');
  }

  public function ReplyAction()
  {
    $id = $this->get('request')->get($this->admin->getIdParameter());
    
    $object = $this->admin->getObject($id);

    if (!$object)
    {
      throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
    }
    
    $form = $this->get('form.factory')->create(new SuggestionReplyType());
    $request = $this->get('request');
    
    $em = $this->getDoctrine()->getEntityManager();
    $templates = $em->getRepository('MYMainBundle:EmailTemplate')->findAll();
    
    if ('POST' == $request->getMethod())
    {
      $form->bindRequest($request);
      if ($form->isValid())
      {
        $subject = $form['subject']->getData();
        $email = $this->container->getParameter('suggestion_reply_email');
        $themessage = $form['message']->getData();
        $recipient = $object->getUser()->getEmail();
        
        $message = \Swift_Message::newInstance()
                        ->setSubject($subject)
                        ->setFrom($email)
                        ->setTo($recipient)
                        ->setContentType('text/html')
                        ->setBody($themessage);
        
        $this->get('mailer')->send($message);
        
        //Adding the sent message to SentMessages
        $sent_message = new SentMessages();
        $date = new \DateTime("now");
        
        $sent_message->setSubject($subject);
        $sent_message->setSentTo($recipient);
        $sent_message->setCreatedAt($date);
        $sent_message->setMessage($themessage);
        
        $em->persist($sent_message);
        $em->flush();
        
        
        
        $this->get('session')->setFlash('sonata_flash_success', $this->get('translator')->trans('Suggestion reply sent.'));
        return $this->redirect($id . '/edit');
      }
    }
    return $this->render('MYMainBundle:Admin:reply.html.twig', array('form' => $form->createView(), 'object' => $object, 'id' => $id, 'templates' => $templates));
  }

}
