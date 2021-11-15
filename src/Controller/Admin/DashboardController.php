<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Entity\Postuler;
use App\Entity\Categorie;
use App\Entity\Publicite;
use App\Entity\Recruteur;
use App\Entity\Evaluation;
use App\Entity\Commentaire;

use App\Entity\Offredemploi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('recrutement');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('commentaire', 'fas fa-list',Commentaire::class);
         yield MenuItem::linkToCrud('postuler', 'fas fa-list', Postuler::class);
         yield MenuItem::linkToCrud('Recruteur', 'fas fa-list', Recruteur::class);
         yield MenuItem::linkToCrud('publicite', 'fas fa-list', Publicite::class);
         yield MenuItem::linkToCrud('evaluation', 'fas fa-list', Evaluation::class);
         yield MenuItem::linkToCrud('categorie', 'fas fa-list', Categorie::class);
         yield MenuItem::linkToCrud('user', 'fas fa-list', User::class);
         yield MenuItem::linkToCrud('offredemploi', 'fas fa-list', Offredemploi::class);
         
         
    }
        }