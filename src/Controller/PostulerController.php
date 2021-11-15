<?php

namespace App\Controller;
use App\Entity\Postuler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostulerController extends AbstractController
{

    
        private $entityManager;
    
        public function __construct(EntityManagerInterface $entityManager ){
            $this->entityManager = $entityManager;
        }
    /**
     * @Route("/postuler", name="postuler")
     */
    public function index(): Response
    {

        $postuler = $this->entityManager->getRepository(Postuler::class)->findAll();
            return $this->render('postuler/index.html.twig', [
                'postuler' =>$postuler  ]);
       
 }

}
