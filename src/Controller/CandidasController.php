<?php

namespace App\Controller;

use App\Entity\Candidas;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CandidasController extends AbstractController
{


    private $entityManager;
    
        public function __construct(EntityManagerInterface $entityManager ){
            $this->entityManager = $entityManager;
        }
    /**
     * @Route("/candidas", name="candidas")
     */
    public function index(): Response
    {


        $candidas = $this->entityManager->getRepository(Candidas::class)->findAll();
        return $this->render('candidas/index.html.twig', [
            'candidas' => 'Candidas',
        ]);
    }
}
