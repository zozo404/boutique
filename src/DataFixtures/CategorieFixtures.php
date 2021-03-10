<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

         $categorieRonde = new Categorie();
         $categorieRondes->setLibelle("Rondes");
         $manager->persist($categorieRondes);

        $categorieTriangles = new Categorie();
        $categorieTriangles->setLibelle("Triangulaires");
        $manager->persist($categorieTriangles);

        $categorieCarrees = new Categorie();
        $categorieCarrees->setLibelle("Carrées");
        $manager->persist($categorieCarrees);

        $manager->flush();

    }
}
