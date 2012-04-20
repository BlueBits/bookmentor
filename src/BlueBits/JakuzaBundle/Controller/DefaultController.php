<?php

namespace BlueBits\JakuzaBundle\Controller;

use BlueBits\JakuzaBundle\Entity as Entity;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller 
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $categoria = new Entity\Categoria();
        $categoria->setNome('Cinema');

        $em->persist($categoria);

        $prodotto = new Entity\Prodotto\ProdottoBase();
        $prodotto->setNome('De Sica');
        $prodotto->setPrezzo(100);
        $prodotto->addCategoria($categoria);
        
        $em->persist($prodotto);
        
        $em->flush();
        
        return $this->render('BlueBitsJakuzaBundle:Default:index.html.twig',
            array('prodotto' => $prodotto)
        );
    }
    
    /**
     * @Route("/leggi")
     */
    public function letturaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $prodotti = $em->createQuery("
                select p, c from BlueBitsJakuzaBundle:Prodotto\ProdottoBase p
                join p.categorie c
                where p.nome = :nome")
            ->setParameter('nome', 'De Sica')
            ->getResult();
            
        return $this->render('BlueBitsJakuzaBundle:Default:index.html.twig',
            array('prodotto' => $prodotti[0])
        );
    }
    
}
