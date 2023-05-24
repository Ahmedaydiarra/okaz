<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueController extends AbstractController
{
    /**
     * @Route("/boutique", name="app_boutique")
     */
    public function index(CategorieRepository $categorieRepository): Response
    {
        // dd($categorieRepository->findAll());
        return $this->render('boutique/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }
}
