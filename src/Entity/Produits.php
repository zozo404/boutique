<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="Produits", indexes={@ORM\Index(name="idMarque", columns={"idMarque"}), @ORM\Index(name="idCategorie", columns={"idCategorie"})})
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idproduits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomProduits", type="string", length=50, nullable=true)
     */
    public $nomproduits;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tailleProduits", type="integer", nullable=true)
     */
    public $tailleproduits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prixProduits", type="decimal", precision=15, scale=2, nullable=true)
     */
    public $prixproduits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgProduits", type="string", length=250, nullable=true)
     */
    public $imgproduits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descriptionProduits", type="string", length=250, nullable=true)
     */
    public $descriptionproduits;

    /**
     * @var \Marque
     *
     * @ORM\ManyToOne(targetEntity="Marque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMarque", referencedColumnName="idMarque")
     * })
     */
    public $idmarque;

    /**
     * @var \Catégorie
     *
     * @ORM\ManyToOne(targetEntity="Catégorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie")
     * })
     */
    public $idcategorie;

    /**
     * @return int
     */
    public function getIdproduits(): int
    {
        return $this->idproduits;
    }

    /**
     * @param int $idproduits
     */
    public function setIdproduits(int $idproduits): void
    {
        $this->idproduits = $idproduits;
    }

    /**
     * @return string|null
     */
    public function getNomproduits(): ?string
    {
        return $this->nomproduits;
    }

    /**
     * @param string|null $nomproduits
     */
    public function setNomproduits(?string $nomproduits): void
    {
        $this->nomproduits = $nomproduits;
    }

    /**
     * @return int|null
     */
    public function getTailleproduits(): ?int
    {
        return $this->tailleproduits;
    }

    /**
     * @param int|null $tailleproduits
     */
    public function setTailleproduits(?int $tailleproduits): void
    {
        $this->tailleproduits = $tailleproduits;
    }

    /**
     * @return string|null
     */
    public function getPrixproduits(): ?string
    {
        return $this->prixproduits;
    }

    /**
     * @param string|null $prixproduits
     */
    public function setPrixproduits(?string $prixproduits): void
    {
        $this->prixproduits = $prixproduits;
    }

    /**
     * @return string|null
     */
    public function getImgproduits(): ?string
    {
        return $this->imgproduits;
    }

    /**
     * @param string|null $imgproduits
     */
    public function setImgproduits(?string $imgproduits): void
    {
        $this->imgproduits = $imgproduits;
    }

    /**
     * @return string|null
     */
    public function getDescriptionproduits(): ?string
    {
        return $this->descriptionproduits;
    }

    /**
     * @param string|null $descriptionproduits
     */
    public function setDescriptionproduits(?string $descriptionproduits): void
    {
        $this->descriptionproduits = $descriptionproduits;
    }

    /**
     * @return \Marque
     */
    public function getIdmarque(): \Marque
    {
        return $this->idmarque;
    }

    /**
     * @param \Marque $idmarque
     */
    public function setIdmarque(\Marque $idmarque): void
    {
        $this->idmarque = $idmarque;
    }

    /**
     * @return \Catégorie
     */
    public function getIdcategorie(): \Catégorie
    {
        return $this->idcategorie;
    }

    /**
     * @param \Catégorie $idcategorie
     */
    public function setIdcategorie(\Catégorie $idcategorie): void
    {
        $this->idcategorie = $idcategorie;
    }

}
