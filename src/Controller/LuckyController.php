<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class LuckyController extends Controller
{
    /**
    * @Route("/number", name="test")
    */
    public function number()
    {
        $number = mt_rand(0, 100);
        return $this->render('number.html.twig', array(
            'number' => $number,
            ));
    }
}