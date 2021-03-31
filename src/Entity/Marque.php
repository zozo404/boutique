<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="Marque")
 * @ORM\Entity
 */
class Marque
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMarque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmarque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomMarque", type="string", length=250, nullable=true)
     */
    private $nommarque;


}
