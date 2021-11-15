<?php

namespace App\Controller;


use App\Entity\Offredemploi;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class offredemploiController extends AbstractController

{

    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
/**
 * @Route("/offredemploi", name="offredemploi")
 */
public function index(): Response
{

    $offredemploi = $this->entityManager->getRepository(Offredemploi::class)->findAll();
        return $this->render('offredemploi/index.html.twig', [
            'offredemploi' => $offredemploi  ]);
   
}

}

