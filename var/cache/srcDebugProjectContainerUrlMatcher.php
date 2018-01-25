<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // test
        if ('/number' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\LuckyController::number',  '_route' => 'test',);
        }

        // inscription
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::registerAction',  '_route' => 'inscription',);
        }

        // login_check
        if ('/login_check' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::check',  '_route' => 'login_check',);
        }

        // accueil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\SitePublicController::indexAction',  '_route' => 'accueil',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'accueil'));
            }

            return $ret;
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SitePublicController::contactAction',  '_route' => 'contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
