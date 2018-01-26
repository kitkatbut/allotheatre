<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SitePublicController extends controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {

        return $this->render('index.html.twig');

    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contactAction()
    {

        return $this->render('contact.html.twig');
    }



    /**
    * @Route("/login", name="login")
    */
    public function loginAction()
    {

        return $this->render('login.html.twig');
    }
    /**
    * @Route("/profil", name="profil")
    */
    public function profilAction()
    {

        return $this->render('profil.html.twig');
    }

}
