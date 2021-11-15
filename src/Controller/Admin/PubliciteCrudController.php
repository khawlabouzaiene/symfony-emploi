<?php

namespace App\Controller\Admin;

use App\Entity\Publicite;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PubliciteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publicite::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('description'),
            TextField::new('prix'),
            DateField::new('date'),
            
            ImageField::new('image')
            ->setBasePath('images/')
            ->setUploadDir('public/images')
            ->setUploadedFileNamePattern('[randomhash].[extension')
        ];
    }
    
}
