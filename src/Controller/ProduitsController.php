<?php

namespace App\Controller;

use App\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
    /**
     * @Route("/produits", name="produits")
     */
    public function index(): Response
    {
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
        ]);
    }
    /* à résoudre
     * public function index(): Response
    {
        $produits = $this->getDoctrine()
            ->getRepository(Produits::class)
            ->findAll();
        return $this->render('produits/index.html.twig',[
            'produits' => $produits,
        ]);
    }
     */

}
