<?php

namespace EnhancedProxy1afba3b4_53dec1f9d041c19ebe90100ea45ce8ac4e4975c7\__CG__\MY\MainBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PageTreeSortController extends \MY\MainBundle\Controller\PageTreeSortController
{
    private $__CGInterception__loader;

    public function upAction($page_id)
    {
        $ref = new \ReflectionMethod('MY\\MainBundle\\Controller\\PageTreeSortController', 'upAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page_id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page_id), $interceptors);

        return $invocation->proceed();
    }

    public function downAction($page_id)
    {
        $ref = new \ReflectionMethod('MY\\MainBundle\\Controller\\PageTreeSortController', 'downAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page_id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page_id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}