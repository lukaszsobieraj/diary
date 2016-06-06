<?php

namespace DiaryBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LinkTest extends WebTestCase {

    private $client;

    public function setUp() {
        $this->client = static::createClient();
    }

    public function arrLinkId() {
        return [
            ['/edit/1', 200],
            ['/update/1', 200],
            ['/delete/1', 302],
            ['/show/1', 200],
        ];
    }

    public function arrSimpleLink() {
        return [
            ['', 200],
            ['/create', 200],
            ['/new', 200],
        ];
    }

    /**
     * @dataProvider arrLinkId
     */
    public function testLinkId($url, $responseCode) {
        $this->client->request('GET', sprintf('/person%s', $url));
        $this->assertEquals($responseCode, $this->client->getResponse()->getStatusCode());
    }

}
