<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericPsr18Client;
use FriendsOfPHP\GenericImplementations\GenericPsr7Request;
use FriendsOfPHP\GenericImplementations\Internal\ConcreteImplementation;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class GenericPsr18ClientTest extends TestCase
{
    protected function setUp(): void
    {
        if (null === ConcreteImplementation::PSR18_VENDOR) {
            $this->markTestSkipped('PSR-18 implementation required');
        }
    }

    public function testSendRequest()
    {
        $client = new GenericPsr18Client();

        $this->assertInstanceOf(ClientInterface::class, $client);

        $response = $client->sendRequest(new GenericPsr7Request('GET', 'http://example.com/'));

        $this->assertSame(200, $response->getStatusCode());
    }
}
