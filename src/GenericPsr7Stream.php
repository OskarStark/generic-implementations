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

if (null !== $vendor = ConcreteImplementation::PSR7_VENDOR) {
    class_alias(Internal::class."\\{$vendor}\\{$vendor}Psr7Stream", GenericPsr7Stream::class);
} else {
    throw new \LogicException('Supported PSR-7 implementation not found, try running "composer require nyholm/psr7".');
}

if (false) {
    final class GenericPsr7Stream implements StreamInterface
    {
        /**
         * @param string|resource $content
         */
        public function __construct($content = '', string $mode = null)
        {
        }
    }
}
