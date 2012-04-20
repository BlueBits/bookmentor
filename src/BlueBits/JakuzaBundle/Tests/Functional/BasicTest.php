<?php

namespace BlueBits\JakuzaBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicTest extends WebTestCase
{
    public function testBase()
    {
        $client = $this->createClient();
        
        $crawler = $client->request('GET', '/');
        
        $this->assertEquals(1, $crawler->filter('h1:contains("BlueBits")')->count());
    }
}