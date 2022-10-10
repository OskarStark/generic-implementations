<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations;

use FriendsOfPHP\GenericImplementations\Internal\ConcreteImplementation;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;

if (null !== $vendor = ConcreteImplementation::PSR7_VENDOR) {
    class_alias(Internal::class."\\{$vendor}\\{$vendor}Psr7UploadedFile", GenericPsr7UploadedFile::class);
} else {
    throw new \LogicException('Supported PSR-7 implementation not found, try running "composer require nyholm/psr7".');
}

if (false) {
    final class GenericPsr7UploadedFile implements UploadedFileInterface
    {
        public function __construct(StreamInterface $stream, int $size = null, int $error = \UPLOAD_ERR_OK, string $clientFilename = null, string $clientMediaType = null)
        {
        }
    }
}
