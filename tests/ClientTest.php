<?php

namespace Varspool\JobAdder;

use Http\Client\HttpClient;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testConstructor()
    {
        $http = $this->createMock(HttpClient::class);

        $client = new Client($http);
        $this->assertInstanceOf(Client::class, $client);
    }
}
