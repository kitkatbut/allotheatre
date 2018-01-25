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

        return $this->render('SitePublic/index.html.twig');

    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contactAction()
    {

        return $this->render('SitePublic/contact.html.twig');
    }
<<<<<<< HEAD
=======


>>>>>>> 90da407725a20f3a6f65c0d85e7cfa064d10fbe8

    /**
    * @Route("/connexion", name="connexion")
    */
    public function connexionAction()
    {

        return $this->render('security/connexion.html.twig');
    }

    /**
    * @Route("/profil", name="profil")
    */
    public function profilAction()
    {

        return $this->render('profil.html.twig');
    }

}
