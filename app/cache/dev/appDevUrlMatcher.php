<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _homepage
        if ($pathinfo === '/homepage') {
            return array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::indexAction',  '_route' => '_homepage',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'homepage',);
        }

        // my_media_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_media_default_index')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/sitemap')) {
            // PrestaSitemapBundle_index
            if (preg_match('#^/sitemap\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PrestaSitemapBundle_index')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::indexAction',));
            }

            // PrestaSitemapBundle_section
            if (preg_match('#^/sitemap\\.(?P<name>[^/\\.]++)\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PrestaSitemapBundle_section')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::sectionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/con')) {
            if (0 === strpos($pathinfo, '/concurs')) {
                // my_main_concurs_concurs
                if (rtrim($pathinfo, '/') === '/concurs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_main_concurs_concurs');
                    }

                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\ConcursController::concursAction',  '_route' => 'my_main_concurs_concurs',);
                }

                // my_main_concurs_detailed
                if (preg_match('#^/concurs/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_main_concurs_detailed');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_main_concurs_detailed')), array (  '_controller' => 'MY\\MainBundle\\Controller\\ConcursController::DetailedAction',));
                }

            }

            if (0 === strpos($pathinfo, '/contact')) {
                // _sent
                if (rtrim($pathinfo, '/') === '/contact/sent') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_sent');
                    }

                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\ContactController::sentAction',  '_route' => '_sent',);
                }

                // _not_sent
                if (rtrim($pathinfo, '/') === '/contact/not_sent') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_not_sent');
                    }

                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\ContactController::notSentAction',  '_route' => '_not_sent',);
                }

                // contact_form
                if (rtrim($pathinfo, '/') === '/contact/form') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contact_form');
                    }

                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact_form',);
                }

            }

        }

        // my_main_interesting_mens
        if (rtrim($pathinfo, '/') === '/mens') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_mens');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::mensAction',  '_route' => 'my_main_interesting_mens',);
        }

        // my_main_interesting_detailed
        if (0 === strpos($pathinfo, '/detiled') && preg_match('#^/detiled/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_detailed');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_main_interesting_detailed')), array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::DetailedAction',));
        }

        // my_main_interesting_womens
        if (rtrim($pathinfo, '/') === '/womens') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_womens');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::womensAction',  '_route' => 'my_main_interesting_womens',);
        }

        // my_main_interesting_kids
        if (rtrim($pathinfo, '/') === '/kids') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_kids');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::kidsAction',  '_route' => 'my_main_interesting_kids',);
        }

        // my_main_interesting_horoscop
        if (rtrim($pathinfo, '/') === '/horoscop') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_horoscop');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::horoscopAction',  '_route' => 'my_main_interesting_horoscop',);
        }

        // my_main_interesting_detailedhoroscop
        if (0 === strpos($pathinfo, '/detiledHoroscop') && preg_match('#^/detiledHoroscop/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_interesting_detailedhoroscop');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_main_interesting_detailedhoroscop')), array (  '_controller' => 'MY\\MainBundle\\Controller\\InterestingController::detailedHoroscopAction',));
        }

        // my_main_main_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_main_index');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'my_main_main_index',);
        }

        if (0 === strpos($pathinfo, '/news')) {
            // my_main_main_news
            if (rtrim($pathinfo, '/') === '/news') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_main_main_news');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::newsAction',  '_route' => 'my_main_main_news',);
            }

            // my_news_archive
            if (rtrim($pathinfo, '/') === '/news/archive') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_news_archive');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::newsArchiveAction',  '_route' => 'my_news_archive',);
            }

            // my_news_detailed
            if (preg_match('#^/news/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_news_detailed');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_news_detailed')), array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::newsDetailedAction',));
            }

        }

        if (0 === strpos($pathinfo, '/gallery')) {
            // my_gallery
            if (preg_match('#^/gallery/(?P<type>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_gallery');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_gallery')), array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::galleryAction',));
            }

            // my_gallery_more
            if (preg_match('#^/gallery/(?P<type>[^/]++)/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_gallery_more');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_gallery_more')), array (  '_controller' => 'MY\\MainBundle\\Controller\\MainController::galleryMoreAction',));
            }

        }

        // my_main_realty_legislations
        if (rtrim($pathinfo, '/') === '/legislations') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_realty_legislations');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::legislationsAction',  '_route' => 'my_main_realty_legislations',);
        }

        // my_main_realty_dealings
        if (rtrim($pathinfo, '/') === '/dealings') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_realty_dealings');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::dealingsAction',  '_route' => 'my_main_realty_dealings',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // my_main_realty_registrations
            if (rtrim($pathinfo, '/') === '/registrations') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_main_realty_registrations');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::registrationsAction',  '_route' => 'my_main_realty_registrations',);
            }

            // my_main_realty_rents
            if (rtrim($pathinfo, '/') === '/rents') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_main_realty_rents');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::rentsAction',  '_route' => 'my_main_realty_rents',);
            }

        }

        // my_main_realty_consultations
        if (rtrim($pathinfo, '/') === '/consultations') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_realty_consultations');
            }

            return array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::consultationsAction',  '_route' => 'my_main_realty_consultations',);
        }

        // my_main_realty_detailed
        if (0 === strpos($pathinfo, '/detailed') && preg_match('#^/detailed/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_main_realty_detailed');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_main_realty_detailed')), array (  '_controller' => 'MY\\MainBundle\\Controller\\RealtyController::detailedAction',));
        }

        if (0 === strpos($pathinfo, '/secured')) {
            if (0 === strpos($pathinfo, '/secured/log')) {
                // _login
                if ($pathinfo === '/secured/login') {
                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
                }

                // _logout
                if ($pathinfo === '/secured/logout') {
                    return array (  '_controller' => 'MY\\MainBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/secured/hello')) {
                // my_main_secured_hello
                if ($pathinfo === '/secured/hello') {
                    return array (  'name' => 'World',  '_controller' => 'MY\\MainBundle\\Controller\\SecuredController::helloAction',  '_route' => 'my_main_secured_hello',);
                }

                // _secured_hello
                if (preg_match('#^/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_secured_hello')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SecuredController::helloAction',));
                }

                // _secured_hello_admin
                if (0 === strpos($pathinfo, '/secured/hello/admin') && preg_match('#^/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_secured_hello_admin')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SecuredController::helloadminAction',));
                }

            }

        }

        // suggestions
        if (preg_match('#^/(?P<_locale>am|en)/suggestions/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suggestions');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suggestions')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::indexAction',));
        }

        // suggestion_archive
        if (preg_match('#^/(?P<_locale>am|en)/suggestion\\-archive/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suggestion_archive');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suggestion_archive')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::archiveAction',));
        }

        // suggestion_make
        if (preg_match('#^/(?P<_locale>am|en)/suggestion/make/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suggestion_make');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suggestion_make')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::makeAction',));
        }

        // suggestion
        if (preg_match('#^/(?P<_locale>am|en)/suggestion/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suggestion');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suggestion')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::showAction',));
        }

        // discussions
        if (preg_match('#^/(?P<_locale>am|en)/discussions/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'discussions');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'discussions')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::discussionsAction',));
        }

        // discussion_archive
        if (preg_match('#^/(?P<_locale>am|en)/discussion\\-archive/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'discussion_archive');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'discussion_archive')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::discussionsArchiveAction',));
        }

        // discussion
        if (preg_match('#^/(?P<_locale>am|en)/discussion/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'discussion');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'discussion')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::discussionAction',));
        }

        // offer
        if (preg_match('#^/(?P<_locale>am|en)/discussion/(?P<slug>[^/]++)/offer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::offerAction',));
        }

        // _offer_not_sent
        if (preg_match('#^/(?P<_locale>am|en)/discussion/(?P<slug>[^/]++)/offer_not_sent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_offer_not_sent')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::offerNotSentAction',));
        }

        // _offerapp_not_sent
        if (preg_match('#^/(?P<_locale>am|en)/discussion/(?P<slug>[^/]++)/offer_app_not_sent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_offerapp_not_sent')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::offerAppNotSentAction',));
        }

        // offerapp
        if (preg_match('#^/(?P<_locale>am|en)/discussion/(?P<slug>[^/]++)/offerapp$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'offerapp')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::offerappAction',));
        }

        // top_suggestions
        if (preg_match('#^/(?P<_locale>am|en)/top\\-suggestions/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'top_suggestions');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'top_suggestions')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::topAction',));
        }

        // top_suggestion
        if (preg_match('#^/(?P<_locale>am|en)/top\\-suggestion/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'top_suggestion');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'top_suggestion')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::topshowAction',));
        }

        // archive_asuggestion
        if (preg_match('#^/(?P<_locale>am|en)/archive\\-asuggestion/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'archive_asuggestion');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'archive_asuggestion')), array (  '_controller' => 'MY\\MainBundle\\Controller\\SuggestionController::archiveshowAction',));
        }

        if (0 === strpos($pathinfo, '/admin/page_tree_')) {
            // page_tree_up
            if (rtrim($pathinfo, '/') === '/admin/page_tree_up') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'page_tree_up');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\PageTreeSortController::upAction',  '_route' => 'page_tree_up',);
            }

            // page_tree_down
            if (rtrim($pathinfo, '/') === '/admin/page_tree_down') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'page_tree_down');
                }

                return array (  '_controller' => 'MY\\MainBundle\\Controller\\PageTreeSortController::downAction',  '_route' => 'page_tree_down',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'MY\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'MY\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'MY\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/loginFb') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

            // _security_login
            if ($pathinfo === '/login') {
                return array('_route' => '_security_login');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/my')) {
                if (0 === strpos($pathinfo, '/admin/my/media')) {
                    if (0 === strpos($pathinfo, '/admin/my/media/media')) {
                        // admin_my_media_media_list
                        if ($pathinfo === '/admin/my/media/media/list') {
                            return array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_list',  '_route' => 'admin_my_media_media_list',);
                        }

                        // admin_my_media_media_create
                        if ($pathinfo === '/admin/my/media/media/create') {
                            return array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_create',  '_route' => 'admin_my_media_media_create',);
                        }

                        // admin_my_media_media_batch
                        if ($pathinfo === '/admin/my/media/media/batch') {
                            return array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_batch',  '_route' => 'admin_my_media_media_batch',);
                        }

                        // admin_my_media_media_edit
                        if (preg_match('#^/admin/my/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_media_edit')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_edit',));
                        }

                        // admin_my_media_media_delete
                        if (preg_match('#^/admin/my/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_media_delete')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_delete',));
                        }

                        // admin_my_media_media_show
                        if (preg_match('#^/admin/my/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_media_show')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_show',));
                        }

                        // admin_my_media_media_export
                        if ($pathinfo === '/admin/my/media/media/export') {
                            return array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_export',  '_route' => 'admin_my_media_media_export',);
                        }

                        // admin_my_media_media_sonata.media.admin.media.view
                        if (preg_match('#^/admin/my/media/media/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_media_sonata.media.admin.media.view')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::viewAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_sonata.media.admin.media.view',));
                        }

                        // admin_my_media_media_watermark
                        if (preg_match('#^/admin/my/media/media/(?P<id>[^/]++)/watermark$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_media_watermark')), array (  '_controller' => 'MY\\MediaBundle\\Controller\\MediaAdminController::watermarkAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_my_media_media_watermark',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/media/gallery')) {
                        // admin_my_media_gallery_list
                        if ($pathinfo === '/admin/my/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_list',  '_route' => 'admin_my_media_gallery_list',);
                        }

                        // admin_my_media_gallery_create
                        if ($pathinfo === '/admin/my/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_create',  '_route' => 'admin_my_media_gallery_create',);
                        }

                        // admin_my_media_gallery_batch
                        if ($pathinfo === '/admin/my/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_batch',  '_route' => 'admin_my_media_gallery_batch',);
                        }

                        // admin_my_media_gallery_edit
                        if (preg_match('#^/admin/my/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_edit',));
                        }

                        // admin_my_media_gallery_delete
                        if (preg_match('#^/admin/my/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_delete',));
                        }

                        // admin_my_media_gallery_show
                        if (preg_match('#^/admin/my/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_show',));
                        }

                        // admin_my_media_gallery_export
                        if ($pathinfo === '/admin/my/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_my_media_gallery_export',  '_route' => 'admin_my_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/my/media/galleryhasmedia')) {
                            // admin_my_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/my/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_list',  '_route' => 'admin_my_media_galleryhasmedia_list',);
                            }

                            // admin_my_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/my/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_create',  '_route' => 'admin_my_media_galleryhasmedia_create',);
                            }

                            // admin_my_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/my/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_batch',  '_route' => 'admin_my_media_galleryhasmedia_batch',);
                            }

                            // admin_my_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/my/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_edit',));
                            }

                            // admin_my_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/my/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_delete',));
                            }

                            // admin_my_media_galleryhasmedia_show
                            if (preg_match('#^/admin/my/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_show',));
                            }

                            // admin_my_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/my/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_my_media_galleryhasmedia_export',  '_route' => 'admin_my_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/my/user')) {
                    if (0 === strpos($pathinfo, '/admin/my/user/user')) {
                        // admin_my_user_user_list
                        if ($pathinfo === '/admin/my/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_list',  '_route' => 'admin_my_user_user_list',);
                        }

                        // admin_my_user_user_create
                        if ($pathinfo === '/admin/my/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_create',  '_route' => 'admin_my_user_user_create',);
                        }

                        // admin_my_user_user_batch
                        if ($pathinfo === '/admin/my/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_batch',  '_route' => 'admin_my_user_user_batch',);
                        }

                        // admin_my_user_user_edit
                        if (preg_match('#^/admin/my/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_edit',));
                        }

                        // admin_my_user_user_delete
                        if (preg_match('#^/admin/my/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_delete',));
                        }

                        // admin_my_user_user_show
                        if (preg_match('#^/admin/my/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_show',));
                        }

                        // admin_my_user_user_export
                        if ($pathinfo === '/admin/my/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_my_user_user_export',  '_route' => 'admin_my_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/user/group')) {
                        // admin_my_user_group_list
                        if ($pathinfo === '/admin/my/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_list',  '_route' => 'admin_my_user_group_list',);
                        }

                        // admin_my_user_group_create
                        if ($pathinfo === '/admin/my/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_create',  '_route' => 'admin_my_user_group_create',);
                        }

                        // admin_my_user_group_batch
                        if ($pathinfo === '/admin/my/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_batch',  '_route' => 'admin_my_user_group_batch',);
                        }

                        // admin_my_user_group_edit
                        if (preg_match('#^/admin/my/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_edit',));
                        }

                        // admin_my_user_group_delete
                        if (preg_match('#^/admin/my/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_delete',));
                        }

                        // admin_my_user_group_show
                        if (preg_match('#^/admin/my/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_show',));
                        }

                        // admin_my_user_group_export
                        if ($pathinfo === '/admin/my/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_my_user_group_export',  '_route' => 'admin_my_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/my/main')) {
                    if (0 === strpos($pathinfo, '/admin/my/main/interestings')) {
                        // admin_my_main_interestings_list
                        if ($pathinfo === '/admin/my/main/interestings/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_list',  '_route' => 'admin_my_main_interestings_list',);
                        }

                        // admin_my_main_interestings_create
                        if ($pathinfo === '/admin/my/main/interestings/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_create',  '_route' => 'admin_my_main_interestings_create',);
                        }

                        // admin_my_main_interestings_batch
                        if ($pathinfo === '/admin/my/main/interestings/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_batch',  '_route' => 'admin_my_main_interestings_batch',);
                        }

                        // admin_my_main_interestings_edit
                        if (preg_match('#^/admin/my/main/interestings/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_interestings_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_edit',));
                        }

                        // admin_my_main_interestings_delete
                        if (preg_match('#^/admin/my/main/interestings/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_interestings_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_delete',));
                        }

                        // admin_my_main_interestings_show
                        if (preg_match('#^/admin/my/main/interestings/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_interestings_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_show',));
                        }

                        // admin_my_main_interestings_export
                        if ($pathinfo === '/admin/my/main/interestings/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.interestings',  '_sonata_name' => 'admin_my_main_interestings_export',  '_route' => 'admin_my_main_interestings_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/horoscop')) {
                        // admin_my_main_horoscop_list
                        if ($pathinfo === '/admin/my/main/horoscop/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_list',  '_route' => 'admin_my_main_horoscop_list',);
                        }

                        // admin_my_main_horoscop_create
                        if ($pathinfo === '/admin/my/main/horoscop/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_create',  '_route' => 'admin_my_main_horoscop_create',);
                        }

                        // admin_my_main_horoscop_batch
                        if ($pathinfo === '/admin/my/main/horoscop/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_batch',  '_route' => 'admin_my_main_horoscop_batch',);
                        }

                        // admin_my_main_horoscop_edit
                        if (preg_match('#^/admin/my/main/horoscop/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_horoscop_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_edit',));
                        }

                        // admin_my_main_horoscop_delete
                        if (preg_match('#^/admin/my/main/horoscop/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_horoscop_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_delete',));
                        }

                        // admin_my_main_horoscop_show
                        if (preg_match('#^/admin/my/main/horoscop/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_horoscop_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_show',));
                        }

                        // admin_my_main_horoscop_export
                        if ($pathinfo === '/admin/my/main/horoscop/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.horoscop',  '_sonata_name' => 'admin_my_main_horoscop_export',  '_route' => 'admin_my_main_horoscop_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/concurs')) {
                        // admin_my_main_concurs_list
                        if ($pathinfo === '/admin/my/main/concurs/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_list',  '_route' => 'admin_my_main_concurs_list',);
                        }

                        // admin_my_main_concurs_create
                        if ($pathinfo === '/admin/my/main/concurs/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_create',  '_route' => 'admin_my_main_concurs_create',);
                        }

                        // admin_my_main_concurs_batch
                        if ($pathinfo === '/admin/my/main/concurs/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_batch',  '_route' => 'admin_my_main_concurs_batch',);
                        }

                        // admin_my_main_concurs_edit
                        if (preg_match('#^/admin/my/main/concurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_concurs_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_edit',));
                        }

                        // admin_my_main_concurs_delete
                        if (preg_match('#^/admin/my/main/concurs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_concurs_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_delete',));
                        }

                        // admin_my_main_concurs_show
                        if (preg_match('#^/admin/my/main/concurs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_concurs_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_show',));
                        }

                        // admin_my_main_concurs_export
                        if ($pathinfo === '/admin/my/main/concurs/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.concurs',  '_sonata_name' => 'admin_my_main_concurs_export',  '_route' => 'admin_my_main_concurs_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/realty')) {
                        // admin_my_main_realty_list
                        if ($pathinfo === '/admin/my/main/realty/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_list',  '_route' => 'admin_my_main_realty_list',);
                        }

                        // admin_my_main_realty_create
                        if ($pathinfo === '/admin/my/main/realty/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_create',  '_route' => 'admin_my_main_realty_create',);
                        }

                        // admin_my_main_realty_batch
                        if ($pathinfo === '/admin/my/main/realty/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_batch',  '_route' => 'admin_my_main_realty_batch',);
                        }

                        // admin_my_main_realty_edit
                        if (preg_match('#^/admin/my/main/realty/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_realty_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_edit',));
                        }

                        // admin_my_main_realty_delete
                        if (preg_match('#^/admin/my/main/realty/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_realty_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_delete',));
                        }

                        // admin_my_main_realty_show
                        if (preg_match('#^/admin/my/main/realty/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_realty_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_show',));
                        }

                        // admin_my_main_realty_export
                        if ($pathinfo === '/admin/my/main/realty/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.realty',  '_sonata_name' => 'admin_my_main_realty_export',  '_route' => 'admin_my_main_realty_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/news')) {
                        // admin_my_main_news_list
                        if ($pathinfo === '/admin/my/main/news/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_list',  '_route' => 'admin_my_main_news_list',);
                        }

                        // admin_my_main_news_create
                        if ($pathinfo === '/admin/my/main/news/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_create',  '_route' => 'admin_my_main_news_create',);
                        }

                        // admin_my_main_news_batch
                        if ($pathinfo === '/admin/my/main/news/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_batch',  '_route' => 'admin_my_main_news_batch',);
                        }

                        // admin_my_main_news_edit
                        if (preg_match('#^/admin/my/main/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_news_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_edit',));
                        }

                        // admin_my_main_news_delete
                        if (preg_match('#^/admin/my/main/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_news_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_delete',));
                        }

                        // admin_my_main_news_show
                        if (preg_match('#^/admin/my/main/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_news_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_show',));
                        }

                        // admin_my_main_news_export
                        if ($pathinfo === '/admin/my/main/news/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.news',  '_sonata_name' => 'admin_my_main_news_export',  '_route' => 'admin_my_main_news_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/gallery')) {
                        // admin_my_main_gallery_list
                        if ($pathinfo === '/admin/my/main/gallery/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_list',  '_route' => 'admin_my_main_gallery_list',);
                        }

                        // admin_my_main_gallery_create
                        if ($pathinfo === '/admin/my/main/gallery/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_create',  '_route' => 'admin_my_main_gallery_create',);
                        }

                        // admin_my_main_gallery_batch
                        if ($pathinfo === '/admin/my/main/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_batch',  '_route' => 'admin_my_main_gallery_batch',);
                        }

                        // admin_my_main_gallery_edit
                        if (preg_match('#^/admin/my/main/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_gallery_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_edit',));
                        }

                        // admin_my_main_gallery_delete
                        if (preg_match('#^/admin/my/main/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_gallery_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_delete',));
                        }

                        // admin_my_main_gallery_show
                        if (preg_match('#^/admin/my/main/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_gallery_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_show',));
                        }

                        // admin_my_main_gallery_export
                        if ($pathinfo === '/admin/my/main/gallery/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.gallery',  '_sonata_name' => 'admin_my_main_gallery_export',  '_route' => 'admin_my_main_gallery_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/ads')) {
                        // admin_my_main_ads_list
                        if ($pathinfo === '/admin/my/main/ads/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_list',  '_route' => 'admin_my_main_ads_list',);
                        }

                        // admin_my_main_ads_create
                        if ($pathinfo === '/admin/my/main/ads/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_create',  '_route' => 'admin_my_main_ads_create',);
                        }

                        // admin_my_main_ads_batch
                        if ($pathinfo === '/admin/my/main/ads/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_batch',  '_route' => 'admin_my_main_ads_batch',);
                        }

                        // admin_my_main_ads_edit
                        if (preg_match('#^/admin/my/main/ads/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_ads_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_edit',));
                        }

                        // admin_my_main_ads_delete
                        if (preg_match('#^/admin/my/main/ads/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_ads_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_delete',));
                        }

                        // admin_my_main_ads_show
                        if (preg_match('#^/admin/my/main/ads/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_ads_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_show',));
                        }

                        // admin_my_main_ads_export
                        if ($pathinfo === '/admin/my/main/ads/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.ads',  '_sonata_name' => 'admin_my_main_ads_export',  '_route' => 'admin_my_main_ads_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/my/main/s')) {
                        if (0 === strpos($pathinfo, '/admin/my/main/slider')) {
                            // admin_my_main_slider_list
                            if ($pathinfo === '/admin/my/main/slider/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_list',  '_route' => 'admin_my_main_slider_list',);
                            }

                            // admin_my_main_slider_create
                            if ($pathinfo === '/admin/my/main/slider/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_create',  '_route' => 'admin_my_main_slider_create',);
                            }

                            // admin_my_main_slider_batch
                            if ($pathinfo === '/admin/my/main/slider/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_batch',  '_route' => 'admin_my_main_slider_batch',);
                            }

                            // admin_my_main_slider_edit
                            if (preg_match('#^/admin/my/main/slider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_slider_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_edit',));
                            }

                            // admin_my_main_slider_delete
                            if (preg_match('#^/admin/my/main/slider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_slider_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_delete',));
                            }

                            // admin_my_main_slider_show
                            if (preg_match('#^/admin/my/main/slider/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_slider_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_show',));
                            }

                            // admin_my_main_slider_export
                            if ($pathinfo === '/admin/my/main/slider/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.slider',  '_sonata_name' => 'admin_my_main_slider_export',  '_route' => 'admin_my_main_slider_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/my/main/suggestion')) {
                            // admin_my_main_suggestion_list
                            if ($pathinfo === '/admin/my/main/suggestion/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_list',  '_route' => 'admin_my_main_suggestion_list',);
                            }

                            // admin_my_main_suggestion_create
                            if ($pathinfo === '/admin/my/main/suggestion/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_create',  '_route' => 'admin_my_main_suggestion_create',);
                            }

                            // admin_my_main_suggestion_batch
                            if ($pathinfo === '/admin/my/main/suggestion/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_batch',  '_route' => 'admin_my_main_suggestion_batch',);
                            }

                            // admin_my_main_suggestion_edit
                            if (preg_match('#^/admin/my/main/suggestion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_suggestion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_edit',));
                            }

                            // admin_my_main_suggestion_delete
                            if (preg_match('#^/admin/my/main/suggestion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_suggestion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_delete',));
                            }

                            // admin_my_main_suggestion_show
                            if (preg_match('#^/admin/my/main/suggestion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_my_main_suggestion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_show',));
                            }

                            // admin_my_main_suggestion_export
                            if ($pathinfo === '/admin/my/main/suggestion/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_export',  '_route' => 'admin_my_main_suggestion_export',);
                            }

                            // admin_my_main_suggestion_suggestion_order
                            if ($pathinfo === '/admin/my/main/suggestion/suggestion_order') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::suggestionOrderAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_suggestion_order',  '_route' => 'admin_my_main_suggestion_suggestion_order',);
                            }

                            // admin_my_main_suggestion_reply
                            if ($pathinfo === '/admin/my/main/suggestion/reply') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::replyAction',  '_sonata_admin' => 'my.main.admin.suggestion',  '_sonata_name' => 'admin_my_main_suggestion_reply',  '_route' => 'admin_my_main_suggestion_reply',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
