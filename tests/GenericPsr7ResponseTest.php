<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericPsr7Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class GenericPsr7ResponseTest extends TestCase
{
    public function testResponse()
    {
        $response = new GenericPsr7Response(202);

        $this->assertInstanceOf(ResponseInterface::class, $response);
        $this->assertSame(202, $response->getStatusCode());
    }

    public function testReasonPhrase()
    {
        $response = new GenericPsr7Response(202, 'Hello');

        $this->assertInstanceOf(ResponseInterface::class, $response);
        $this->assertSame(202, $response->getStatusCode());
        $this->assertSame('Hello', $response->getReasonPhrase());
    }
}
