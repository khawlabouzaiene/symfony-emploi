<?php

namespace App\Controller\Admin;

use App\Entity\Offredemploi;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OffredemploiCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Offredemploi::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            
            
            EmailField::new('email'),
            TelephoneField::new('telephone'),
            TextField::new('adresse'),
            TextareaField::new('description'),
            TextField::new('specialite'),
            DateField::new('date_debut'),
            DateField::new('date_fin'),
            ImageField::new('image')
            ->setBasePath('images/')
            ->setUploadDir('public/images')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
    
}
