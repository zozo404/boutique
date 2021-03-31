<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartient
 *
 * @ORM\Table(name="appartient", indexes={@ORM\Index(name="FK_appartient_categorie", columns={"id_categorie"})})
 * @ORM\Entity
 */
class Appartient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategorie;


}
