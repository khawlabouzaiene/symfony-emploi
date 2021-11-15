<?php

namespace App\Controller\Admin;

use App\Entity\Postuler;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostulerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Postuler::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
        ];
    }
    
}
