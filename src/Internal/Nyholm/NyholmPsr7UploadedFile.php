<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Internal\Nyholm;

use Nyholm\Psr7\UploadedFile;
use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class NyholmPsr7UploadedFile extends UploadedFile
{
    public function __construct(StreamInterface $stream, int $size = null, int $error = \UPLOAD_ERR_OK, string $clientFilename = null, string $clientMediaType = null)
    {
        parent::__construct($stream, $size ?? $stream->getSize(), $error, $clientFilename, $clientMediaType);
    }
}
