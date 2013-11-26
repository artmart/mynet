<?php

namespace MY\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{

  /**
   * 
   */
  public function testIndex()
  {
    $client = static::createClient();

    $crawler = $client->request('GET', '/am/');
    
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Homepage is not working!');
  }

  /**
   * 
   */
  public function testNews()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_news', array('_locale' => 'en')));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'News is not working!');
  }
  

  /**
   * 
   */
  public function testNewsArchive()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_news_archive', array('_locale' => 'en')));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'News archive is not working!');
  }
  
  /**
   * 
   */
  public function testNewsDetailed()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT n FROM MYMainBundle:News n")->setMaxResults(1);
    $someProject = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_news_detailed', array('_locale' => 'am', 'slug' => $someProject->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'News Detailed is not working!');
  }

  /**
   * 
   */
  public function testWebcams()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_webcams', array('_locale' => 'en')));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Webcams is not working!');
  }
  
  /**
   * 
   */
  public function testGallery()
  {
    $client = static::createClient();
    
    //Checking photo galleries, type = photos, i.e. 1
    $type = 'photos';

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_gallery', array('_locale' => 'am', 'type' => $type)));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Galleryies page is not working!');
  }
  
  public function testGalleryMore()
  {
    $client = static::createClient();
    
    //Checking photo galleries, type = photos, i.e. 1
    $type = 'photos';

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT g FROM MYMainBundle:Gallery g WHERE g.type = 1")->setMaxResults(1);
    $gallery = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_gallery_more', array('_locale' => 'am', 'type' => $type, 'slug' => $gallery->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Galleryies more page is not working!');
  }

  /**
   * 
   */
  public function testSights()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_sights', array('_locale' => 'en')));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Sights is not working!');
  }

  /**
   * 
   */
  public function testEvents()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_events', array('_locale' => 'en')));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Events is not working!');
  }

  /**
   * 
   */
  public function testEventsCategories()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT c FROM MYMainBundle:EventCategory c")->setMaxResults(1);
    $someProject = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_events_category', array('_locale' => 'am', 'category_slug' => $someProject->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Events vategories is not working!');
  }

  /**
   * 
   */
  public function testEventsCategory()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT e, c FROM MYMainBundle:Event e JOIN e.event_cat_id c")->setMaxResults(1);
    $someProject = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_events_category', array('_locale' => 'am', 'page' => 'events', 'category_slug' => $someProject->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Events categories is not working!');
  }
  
  public function testEventDetailed()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT e FROM MYMainBundle:Event e")->setMaxResults(1);
    $someEvent = $query->getSingleResult();
    
    $event_slug = $someEvent->getSlug();
    $cat_slug = $someEvent->getEventCatId()->getSlug();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_event_detailed', array('_locale' => 'am', 'category_slug' => $cat_slug, 'event_slug' => $event_slug)));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Events categories is not working!');
  }

  /**
   * 
   */
  public function testSubPage()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT p FROM MYMainBundle:Page p")->setMaxResults(1);
    $someProject = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_page_sub', array('_locale' => 'am', 'page' => $someProject->getSlug(), 'sub' => $someProject->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Sub Page is not working!');
  }

  /**
   * 
   */
  public function testPage()
  {
    $client = static::createClient();

    // get container
    $container = $client->getContainer();
    // get entity manager to get actice slug
    $em = $container->get('doctrine')->getEntityManager();
    $query = $em->createQuery("SELECT p FROM MYMainBundle:Page p JOIN p.menu_id m")->setMaxResults(1);
    $someProject = $query->getSingleResult();

    // get router
    $router = $container->get('router');
    $crawler = $client->request('GET', $router->generate('my_page', array('_locale' => 'am', 'page' => $someProject->getSlug())));
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Page is not working!');
  }

}
