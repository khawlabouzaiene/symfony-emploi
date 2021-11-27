<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Offredemploi;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
public function index(Request $request,Offredemploi $offredemploi,EntityManagerInterface $manager): Response
{
    $commentaire = new commentaire();
    
    $form = $this->createForm(CommentaireType::class,$commentaire);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $commentaire->setCreatedAt(new \DateTimeImmutable())
                 ->setOffredemploi($offredemploi);
        $manager->persist($commentaire);
        $manager->flush();
     
                 return $this->redirectToRoute('offrededemploi');
        }

    $offredemploi = $this->entityManager->getRepository(Offredemploi::class)->findAll();
        return $this->render('offredemploi/index.html.twig', [
            'offredemploi' => $offredemploi, 
            'commentaireForm' => $form->createView()
        ]);
}

}

