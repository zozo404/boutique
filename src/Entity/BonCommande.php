<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonCommande
 *
 * @ORM\Table(name="bon_commande")
 * @ORM\Entity
 */
class BonCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_bon_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonCommande;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="facture", type="boolean", nullable=true)
     */
    private $facture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_produit_retirer", type="string", length=50, nullable=true)
     */
    private $dateProduitRetirer;


}
