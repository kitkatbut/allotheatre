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
<<<<<<< HEAD

    
    
    
=======
 
>>>>>>> 027557aa15a5709ae4db0940b14c7ac4be35aee1

    /**
    * @Route("/connexion", name="connexion")
    */
    public function connexionAction()
    {

        return $this->render('connexion.html.twig');
    }


}
