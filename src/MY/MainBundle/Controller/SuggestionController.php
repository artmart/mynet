<?php

namespace MY\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MY\MainBundle\Entity\Suggestion;
use MY\MainBundle\Entity\Comment;
use MY\MainBundle\Form\Type\ContactType;
use MY\MainBundle\Entity\Contact;
use MY\MainBundle\Form\Type\ApplicationType;
use MY\MainBundle\Entity\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Description of SuggestionController
 *
 * @author Vazgen Manukyan <vazgen.manukyan@gmail.com>
 */
class SuggestionController extends Controller
{

  /**
   * @Route("/{_locale}/suggestions/", name="suggestions", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function indexAction()
  {
    // get project by slug

    $em = $this->getDoctrine()->getEntityManager();

    $query = $em->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.in_discussion = 0 AND s.in_top != 1 AND s.archive != 1 AND  s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC");

    // get pagination
    $per_page = $this->container->getParameter('items_per_page');
    $paginator = $this->get('knp_paginator');

    $pagination = $paginator->paginate(
            $query, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    return array('pagination' => $pagination);
  }

  /**
   * @Route("/{_locale}/suggestion-archive/", name="suggestion_archive", requirements={"_locale" = "am|en"})
   */
  public function archiveAction()
  {
    // get project by slug

    $em = $this->getDoctrine()->getEntityManager();

    $query = $em->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.in_discussion = 0 AND s.archive = 1 AND s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC");

    // get pagination
    $per_page = $this->container->getParameter('items_per_page');
    $paginator = $this->get('knp_paginator');

    $pagination = $paginator->paginate(
            $query, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    return $this->render('MYMainBundle:Suggestion:archiveIndex.html.twig', array('pagination' => $pagination));
  }

  /**
   * @Route("/{_locale}/suggestion/make/", name="suggestion_make", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function makeAction()
  {
    $suggestion = new Suggestion();

    $form = $this->createFormBuilder($suggestion)
            ->add('title')
            ->add('suggestion')
            ->add('solution')
            ->add('file')
            ->getForm()
    ;

    if ($this->getRequest()->isMethod('POST'))
    {
      $form->bind($this->getRequest());
      if ($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        // add main data from request
        $title = $form->getData()->getTitle();
        $suggestion->setTitleRaw($title);
        $sugg = $form->getData()->getSuggestion();
        $suggestion->setSuggestionRaw($sugg);
        $solution = $form->getData()->getSolution();
        $suggestion->setSolutionRaw($solution);
        $date = new \DateTime("now");
        $suggestion->setCreatedAt($date);

        // add user
        $suggestion->setUser($this->getUser());
        $suggestion->setStatus(Suggestion::UNCHECKED);
        $suggestion->setName($title);

        $em->persist($suggestion);
        $em->flush();

        //$email = $this->getUser()->getEmail()); 
        //Send alert to admin
        $from = 'NewSuggestion@mynet.am';
        $to = $this->container->getParameter('mail_suggestion_alert');

        $message = \Swift_Message::newInstance()
                ->setSubject($title)
                ->setFrom($from)
                ->setTo($to)
                ->setBody($sugg);

        $this->get('mailer')->send($message);
      }
    }
    else
    {
      $this->createNotFoundException();
    }

    return array();
  }

  /**
   * @Route("/{_locale}/suggestion/{slug}/", name="suggestion", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function showAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Suggestion not found!');
    }

    //$suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneExistingBySlug($slug);
    //var_dump($suggestion); exit;

    $suggestion_id = $suggestion->getId();

    $comments = $em->getRepository('MYMainBundle:Comment')->findAllBySuggestionId($suggestion_id);

    return array('object' => $suggestion, 'comments' => $comments);
  }

  /**
   * @Route("/{_locale}/discussions/", name="discussions", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function discussionsAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $query = $em->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.in_discussion = 1 AND s.archive = 0 AND s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC");

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $query, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    return array('pagination' => $pagination);
  }

  /**
   * @Route("/{_locale}/discussion-archive/", name="discussion_archive", requirements={"_locale" = "am|en"})
   */
  public function discussionsArchiveAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    $query = $em->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.in_discussion = 1 AND s.archive = 1 AND s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC");

    // get pagination
    $paginator = $this->get('knp_paginator');
    $per_page = $this->container->getParameter('items_per_page');

    $pagination = $paginator->paginate(
            $query, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    return $this->render('MYMainBundle:Suggestion:discussions.html.twig', array('pagination' => $pagination));
  }

  /**
   * 
   * @return type
   */
  public function formAction()
  {

    $suggestion = new Suggestion();

    $form = $this->createFormBuilder($suggestion)
            ->add('title')
            ->add('suggestion')
            ->add('solution')
            ->add('file')
            ->getForm()
    ;

    return $this->render('MYMainBundle:Suggestion:form.html.twig', array('form' => $form->createView()));
  }

  /**
   * @Route("/{_locale}/discussion/{slug}/", name="discussion", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function discussionAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Discussion not found!');
    }

    //get application form

    $application = new Application();

    $appform = $this->createForm(new ApplicationType(), $application);

    // get form
    $contact = new Contact();

    $form = $this->createForm(new ContactType(), $contact);

    return array('object' => $suggestion, 'form' => $form->createView(), 'appform' => $appform->createView());
  }

  /**
   * @Route("/{_locale}/discussion/{slug}/offer", name="offer", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function offerAction($slug)
  {

    $em = $this->getDoctrine()->getEntityManager();
    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    $contact = new Contact();
    $form = $this->createForm(new ContactType(), $contact);

    if ($this->getRequest()->isMethod('POST'))
    {
      $form->bind($this->getRequest());

      //var_dump($contact);

      if ($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();

        $contact->setSuggestion($suggestion);

        $em->persist($contact);
        $em->flush();
        
        $this->redirect($this->generateUrl('discussion', array('slug' => $slug)));
      }
      else
      {
        return new RedirectResponse($this->generateUrl('_offer_not_sent', array('slug' => $slug)));
      }
    }
      $this->redirect($this->generateUrl('discussion', array('slug' => $slug)));
  }

  /**
   * @Route("/{_locale}/discussion/{slug}/offer_not_sent", name="_offer_not_sent", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function offerNotSentAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Discussion not found!');
    }

    //get application form

    $application = new Application();

    $appform = $this->createForm(new ApplicationType(), $application);

    // get form
    $contact = new Contact();

    $form = $this->createForm(new ContactType(), $contact);

    return array('object' => $suggestion, 'form' => $form->createView(), 'appform' => $appform->createView());
  }
  
  /**
   * @Route("/{_locale}/discussion/{slug}/offer_app_not_sent", name="_offerapp_not_sent", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function offerAppNotSentAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Discussion not found!');
    }

    //get application form

    $application = new Application();

    $appform = $this->createForm(new ApplicationType(), $application);

    // get form
    $contact = new Contact();

    $form = $this->createForm(new ContactType(), $contact);

    return array('object' => $suggestion, 'form' => $form->createView(), 'appform' => $appform->createView());
  }

  /**
   * @Route("/{_locale}/discussion/{slug}/offerapp", name="offerapp", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function offerappAction($slug)
  {

    $em = $this->getDoctrine()->getEntityManager();
    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneBy(array('slug' => $slug));

    $app = new Application();
    $appform = $this->createForm(new ApplicationType(), $app);

    if ($this->getRequest()->isMethod('POST'))
    {
      $appform->bind($this->getRequest());

      //var_dump($contact);

      if ($appform->isValid())
      {
        $em = $this->getDoctrine()->getManager();

        $app->setSuggestion($suggestion);

        $em->persist($app);
        $em->flush();
        
        $this->redirect($this->generateUrl('discussion', array('slug' => $slug)));
      }
      else
      {
        return new RedirectResponse($this->generateUrl('_offerapp_not_sent', array('slug' => $slug)));
      }
    }
      $this->redirect($this->generateUrl('discussion', array('slug' => $slug)));


    return array();
  }

  /**
   * @Route("/{_locale}/top-suggestions/", name="top_suggestions", requirements={"_locale" = "am|en"})
   */
  public function topAction()
  {

    $em = $this->getDoctrine()->getEntityManager();

    $query = $em->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.in_discussion = 0 AND s.in_top = 1 AND s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC");

    // get pagination
    $per_page = $this->container->getParameter('items_per_page');
    $paginator = $this->get('knp_paginator');

    $pagination = $paginator->paginate(
            $query, $this->get('request')->query->get('page', 1)/* page number */, $per_page/* limit per page */
    );

    return $this->render('MYMainBundle:Suggestion:topIndex.html.twig', array('pagination' => $pagination));
  }

  /**
   * @Route("/{_locale}/top-suggestion/{slug}/", name="top_suggestion", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function topshowAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneTopBySlug($slug);

    $suggestion_id = $suggestion->getId();

    $comments = $em->getRepository('MYMainBundle:Comment')->findAllBySuggestionId($suggestion_id);

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Suggestion not found!');
    }

    return $this->render('MYMainBundle:Suggestion:topShow.html.twig', array('object' => $suggestion, 'comments' => $comments));
  }

  /**
   * @Route("/{_locale}/archive-asuggestion/{slug}/", name="archive_asuggestion", requirements={"_locale" = "am|en"})
   * @Template()
   */
  public function archiveshowAction($slug)
  {
    // get project by slug
    $em = $this->getDoctrine()->getEntityManager();

    $suggestion = $em->getRepository('MYMainBundle:Suggestion')->findOneArchiveBySlug($slug);

    $suggestion_id = $suggestion->getId();

    $comments = $em->getRepository('MYMainBundle:Comment')->findAllBySuggestionId($suggestion_id);

    if (!$suggestion)
    {
      throw $this->createNotFoundException('Suggestion not found!');
    }

    return $this->render('MYMainBundle:Suggestion:archiveShow.html.twig', array('object' => $suggestion, 'comments' => $comments));
  }

}
