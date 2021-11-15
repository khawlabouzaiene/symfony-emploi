<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends AbstractController
{
    
    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/commentaire", name="commentaire")
     */
      public function index(): Response
    {

        $home= $this->entityManager->getRepository(Commentaire::class)->findAll();
        return $this->render('commentaire/index.html.twig', [
            'commentaire' => 'Commentaire',
        ]);
    }
}
