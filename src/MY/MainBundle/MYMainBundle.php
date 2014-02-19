<?php

namespace MY\MainBundle;

use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use MY\MainBundle\Entity\Menu;

class MYMainBundle extends Bundle
{
/*
  public function boot()
  {
    $router = $this->container->get('router');
    $event = $this->container->get('event_dispatcher');
    $em = $this->container->get('doctrine');

    $l = $this->container->getParameter('languages');
    $langs = array_keys($l);

    //listen presta_sitemap.populate event
    $event->addListener(SitemapPopulateEvent::onSitemapPopulate, function(SitemapPopulateEvent $event) use ($router, $em, $langs) {
              $urla = array();
              $url_n = array();
              //get absolute homepage url

              $url = $router->generate('my_content_homepage', array('_locale' => 'en'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.9), 'default');
              
              $url = $router->generate('my_content_homepage', array('_locale' => 'am'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.9), 'default');
              
              $url = $router->generate('my_webcams', array('_locale' => 'en'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.9), 'default');

              $url = $router->generate('my_news', array('_locale' => 'en'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.8), 'default');

              $url = $router->generate('my_events', array('_locale' => 'en'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.7), 'default');

              $url = $router->generate('my_page', array('_locale' => 'en', 'page' => 'gallery'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.6), 'default');

              $url = $router->generate('my_page', array('_locale' => 'en', 'page' => 'sights'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.5), 'default');

              $url = $router->generate('my_page', array('_locale' => 'en', 'page' => 'culture'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.3), 'default');

              $url = $router->generate('my_page_sub', array('_locale' => 'en', 'page' => 'ourcity', 'sub' => 'mayors'), true);
              $event->getGenerator()->addUrl(new UrlConcrete($url, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.2), 'default');



              foreach ($langs as $lang)
              {
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'culture'), true);
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'map'), true);
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'webcams'), true);
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'events'), true);
                $urla[] = $router->generate('my_news', array('_locale' => $lang), true);
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'gallery'), true);
                $urla[] = $router->generate('my_page', array('_locale' => $lang, 'page' => 'sights'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'history'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'symbols'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'cityhall'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'mayors'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'districts'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ourcity', 'sub' => 'tuorism'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'theater'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'balet'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'galleries'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'museums'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'matenadaran'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'chc'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'cycc'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'hh'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'culture', 'sub' => 'mas'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'ggallery', 'sub' => 'photo'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'evideo', 'sub' => 'video'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'monuments'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'wconst'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'parks'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'bgarden'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'zoo'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'delfin'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'metro'), true);
                $urla[] = $router->generate('my_page_sub', array('_locale' => $lang, 'page' => 'sights', 'sub' => 'squares'), true);
                //add homepage url to the urlset named default

                foreach ($urla as $urls)
                {
                  $event->getGenerator()->addUrl(new UrlConcrete($urls, new \DateTime(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.4), 'default');
                }
              }


              foreach ($langs as $lang)
              {
                $url_n[] = $router->generate('my_events', array('_locale' => $lang), true);
                $url_n[] = $router->generate('my_news', array('_locale' => $lang), true);
                //add homepage url to the urlset named default

                foreach ($url_n as $urls_n)
                {
                  $event->getGenerator()->addUrl(new UrlConcrete($urls_n, new \DateTime(), UrlConcrete::CHANGEFREQ_DAILY, 0.7), 'default');
                }
              }

              // get news
              $newss = $em->getEntityManager()->getRepository('MYMainBundle:News')->findAllNews();

              foreach ($newss as $news)
              {
                foreach ($langs as $lang)
                {
                  $url_news = $router->generate('my_news_detailed', array('_locale' => $lang, 'slug' => $news->getSlug()), true);
                  //add homepage url to the urlset named default
                  $event->getGenerator()->addUrl(new UrlConcrete($url_news, $news->getUpdated(), UrlConcrete::CHANGEFREQ_WEEKLY, 0.8), 'default');
                }
              }
            });
  }
  */

}
