<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericPsr7Request;
use FriendsOfPHP\GenericImplementations\GenericPsr7Uri;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class GenericPsr7RequestTest extends TestCase
{
    public function testRequest()
    {
        $request = new GenericPsr7Request('GET', '/foo');

        $this->assertInstanceOf(RequestInterface::class, $request);
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('/foo', (string) $request->getUri());
    }

    public function testRequestUri()
    {
        $request = new GenericPsr7Request('GET', new GenericPsr7Uri('/foo'));

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('/foo', (string) $request->getUri());
    }
}
