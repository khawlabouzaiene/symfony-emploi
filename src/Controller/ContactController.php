<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Contact;
use App\Form\ContactType;


use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
private $entityManager;
    
public function __construct(EntityManagerInterface $entityManager ){
    $this->entityManager = $entityManager;

}
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        $contact = new contact();
    $form = $this->createForm(ContactType::class,$contact);


    
           
        
        
            $agence = $this->entityManager->getRepository(Agence::class)->findAll();
                return $this->render('contact/index.html.twig', [
                    'agence' => $agence, 
                    
                


            
        ]);
    }
}
