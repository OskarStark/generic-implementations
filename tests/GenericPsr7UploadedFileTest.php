<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Tests;

use FriendsOfPHP\GenericImplementations\GenericPsr7Stream;
use FriendsOfPHP\GenericImplementations\GenericPsr7UploadedFile;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UploadedFileInterface;

class GenericPsr7UploadedFileTest extends TestCase
{
    public function testUploadedFile()
    {
        $file = new GenericPsr7UploadedFile(new GenericPsr7Stream('Hello'), null, \UPLOAD_ERR_PARTIAL, 'client.name', 'client/type');

        $this->assertInstanceOf(UploadedFileInterface::class, $file);
        $this->assertSame(5, $file->getSize());
        $this->assertSame(\UPLOAD_ERR_PARTIAL, $file->getError());
        $this->assertSame('client.name', $file->getClientFilename());
        $this->assertSame('client/type', $file->getClientMediaType());
    }
}
