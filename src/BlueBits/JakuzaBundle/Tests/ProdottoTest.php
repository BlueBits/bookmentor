<?php

class ProdottoTest extends \PHPUnit_Framework_TestCase
{
    public function testGetterABuffo()
    {
        $prodotto = new BlueBits\JakuzaBundle\Entity\Prodotto();
        
        $prodotto->setNome('gillo pontecorvo');
        
        $this->assertEquals('gillo pontecorvo', $prodotto->getNome());
    }
    
    public function testSetCategoria()
    {
        $categoria = $this->getMock('\BlueBits\JakuzaBundle\Entity\Categoria');
        
        $prodotto = new BlueBits\JakuzaBundle\Entity\Prodotto();
        
        $prodotto->addCategoria($categoria);
        
        $categorie = $prodotto->getCategorie();
        
        $this->assertEquals($categoria, $categorie[0]);
    }
}
