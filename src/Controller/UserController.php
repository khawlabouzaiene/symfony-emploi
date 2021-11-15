<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    
        private $entityManager;
    
        public function __construct(EntityManagerInterface $entityManager ){
            $this->entityManager = $entityManager;
        }
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        $user = $this->entityManager->getRepository(User::class)->findAll();
        return $this->render('user/index.html.twig', [
            'user' => 'User',
        ]);
    }
}
