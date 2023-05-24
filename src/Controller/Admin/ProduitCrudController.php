<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('imageFile')->setFormType(VichImageType::class),
            ImageField::new('file')->setBasePath('/uploads/produits')->onlyOnIndex(),
            TextareaField::new('description')->hideOnIndex(),
            TextField::new('etat_produit')->hideOnIndex(),
            TextField::new('dimensions')->hideOnIndex(),
            TextField::new('couleur')->hideOnIndex(),
            NumberField::new('prix')->hideOnIndex(),
            NumberField::new('disponibilite')->hideOnIndex(),
            AssociationField::new('categorie'),
            AssociationField::new('magasin'),


        ];
    }
    
}
