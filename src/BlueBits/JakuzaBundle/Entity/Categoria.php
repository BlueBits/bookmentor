<?php

namespace BlueBits\JakuzaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoria")
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $nome;
    
    /**
     * @ORM\ManyToMany(targetEntity="BlueBits\JakuzaBundle\Entity\Prodotto\Divano", mappedBy="categorie")
     */
    protected $divani;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    public function __construct()
    {
        $this->prodotti = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add prodotti
     *
     * @param BlueBits\JakuzaBundle\Entity\Prodotto $prodotti
     */
    public function addProdotto(\BlueBits\JakuzaBundle\Entity\Prodotto $prodotti)
    {
        $this->prodotti[] = $prodotti;
    }

    /**
     * Get prodotti
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProdotti()
    {
        return $this->prodotti;
    }

    /**
     * Add divani
     *
     * @param BlueBits\JakuzaBundle\Entity\Prodotto\Divano $divani
     */
    public function addDivano(\BlueBits\JakuzaBundle\Entity\Prodotto\Divano $divani)
    {
        $this->divani[] = $divani;
    }

    /**
     * Get divani
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDivani()
    {
        return $this->divani;
    }
}