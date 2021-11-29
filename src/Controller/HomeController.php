<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
       
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

       return $this-> render('home/index.html.twig',[
           'controller_name' =>'homeController',]);

           
    }



    /**
     * @Route("/home/{id}", name="home_show")
    */
    public function show($id)
    {
        $candidas = $this->getDoctrine()
                      ->getRepository(Candidas::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/show.html.twig', [
                        'candidas' => $candidas
                    ]);
}
}