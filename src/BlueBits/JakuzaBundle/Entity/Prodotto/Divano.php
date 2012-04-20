<?php

namespace BlueBits\JakuzaBundle\Entity\Prodotto;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Divano extends ProdottoBase
{
    /**
     * Scala Johnson-Levi di morbidezza 
     * 
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $morbidezza;
    
    /**
     * @ORM\ManyToMany(targetEntity="BlueBits\JakuzaBundle\Entity\Categoria", inversedBy="divani")
     * @ORM\JoinTable(name="divani_categorie")
     */
    protected $categorie;
    
    /**
     * Set morbidezza
     *
     * @param integer $morbidezza
     */
    public function setMorbidezza($morbidezza)
    {
        $this->morbidezza = $morbidezza;
    }

    /**
     * Get morbidezza
     *
     * @return integer 
     */
    public function getMorbidezza()
    {
        return $this->morbidezza;
    }

    public function __construct()
    {
        $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add categorie
     *
     * @param BlueBits\JakuzaBundle\Entity\Categoria $categorie
     */
    public function addCategoria(\BlueBits\JakuzaBundle\Entity\Categoria $categorie)
    {
        $this->categorie[] = $categorie;
    }

    /**
     * Get categorie
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}