<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericHttplugClient;
use FriendsOfPHP\GenericImplementations\GenericPsr7Request;
use FriendsOfPHP\GenericImplementations\Internal\ConcreteImplementation;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use PHPUnit\Framework\TestCase;

class GenericHttplugClientTest extends TestCase
{
    protected function setUp(): void
    {
        if (null === ConcreteImplementation::HTTPLUG_VENDOR) {
            $this->markTestSkipped('Httplug implementation required');
        }
    }

    public function testSendRequest()
    {
        $client = new GenericHttplugClient();

        $this->assertInstanceOf(HttpClient::class, $client);
        $this->assertInstanceOf(HttpAsyncClient::class, $client);

        $response = $client->sendRequest(new GenericPsr7Request('GET', 'http://example.com/'));

        $this->assertSame(200, $response->getStatusCode());
    }

    public function testSendAsyncRequest()
    {
        $client = new GenericHttplugClient();

        $response = $client->sendAsyncRequest(new GenericPsr7Request('GET', 'http://example.com/'));

        $this->assertSame(200, $response->wait()->getStatusCode());
    }
}
