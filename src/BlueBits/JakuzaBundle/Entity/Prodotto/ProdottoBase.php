<?php

namespace BlueBits\JakuzaBundle\Entity\Prodotto;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="prodotto")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="subclass", type="integer")
 * @ORM\DiscriminatorMap({"0" = "ProdottoBase", "1" = "Divano"})
 */
class ProdottoBase
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
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $prezzo;

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

    /**
     * Set prezzo
     *
     * @param integer $prezzo
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    /**
     * Get prezzo
     *
     * @return integer 
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }
}