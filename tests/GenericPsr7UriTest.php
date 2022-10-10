<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericPsr7Uri;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;

class GenericPsr7UriTest extends TestCase
{
    public function testUri()
    {
        $uri = new GenericPsr7Uri('/hello');

        $this->assertInstanceOf(UriInterface::class, $uri);
        $this->assertSame('/hello', (string) $uri);
    }

    public function testUriEmpty()
    {
        $uri = new GenericPsr7Uri();

        $this->assertSame('', $uri->getPath());
    }
}
