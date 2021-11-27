<?php

namespace App\Controller;
use App\Entity\Candidas;
use App\Entity\Recruteur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecruteurController extends AbstractController
{


    
        private $entityManager;
    
        public function __construct(EntityManagerInterface $entityManager ){
            $this->entityManager = $entityManager;
        }
    /**
     * @Route("/recruteur", name="recruteur")
     */
    public function index(): Response
    {

        $recruteur = $this->entityManager->getRepository(Recruteur::class)->findAll();
     
        return $this->render('recruteur/index.html.twig', [
            'recruteur' => '$recruteur',
        ]);
    }
}
