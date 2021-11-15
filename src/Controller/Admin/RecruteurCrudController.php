<?php

namespace App\Controller\Admin;

use App\Entity\Recruteur;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecruteurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recruteur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            
            TextField::new('nom'),
            TextField::new('adresse'),
            TextField::new('password'),
            TextEditorField::new('description'),
            EmailField::new('email'),
            TelephoneField::new('telephone'),
            EmailField::new('email'),
            TextField::new('secteur'),
            ImageField::new('image')
            ->setBasePath('image/')
            ->setUploadDir('image/image')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        
        ];
    }
    
}
