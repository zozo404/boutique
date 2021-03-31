<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catégorie
 *
 * @ORM\Table(name="Catégorie")
 * @ORM\Entity
 */
class Catégorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomCategorie", type="string", length=50, nullable=true)
     */
    private $nomcategorie;


}
