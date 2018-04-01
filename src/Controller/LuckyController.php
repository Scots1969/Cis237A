<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class LuckyController extends BaseController
{
    /**
     *@Route("/homepage")
     */
    public function homepage()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky_number.html.twig', ['random_number' => $number]);
        //return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
        //);
    }
}
