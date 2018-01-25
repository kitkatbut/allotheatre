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
=======
<<<<<<< HEAD

=======
>>>>>>> 31589aa53df94bb04625345365043833ea0bb2c7
>>>>>>> 0c081a5ab5da831d40a2bf8f307c586355d9feb3
>>>>>>> 9387e28aa21e2a51bf2a3a10b57e7629ab16a99f

    /**
    * @Route("/connexion", name="connexion")
    */
    public function connexionAction()
    {

        return $this->render('connexion.html.twig');
    }
    /**
    * @Route("/profil", name="profil")
    */
    public function profilAction()
    {

        return $this->render('profil.html.twig');
    }

}
