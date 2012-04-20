<?php

class CategoriaTest extends \PHPUnit_Framework_TestCase
{
    public function testGetterABuffo()
    {
        $prodotto = new BlueBits\JakuzaBundle\Entity\Categoria();
        
        $prodotto->setNome('cinema');
        
        $this->assertEquals('cinema', $prodotto->getNome());
    }
}
