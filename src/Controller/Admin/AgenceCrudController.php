<?php

namespace App\Controller\Admin;

use App\Entity\Agence;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AgenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Agence::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
        
            TextField::new('nom'),
            NumberField::new('lon'),
            NumberField::new('lat'),
        
        ];
    }

}
