<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations;

use FriendsOfPHP\GenericImplementations\Internal\ConcreteImplementation;
use Psr\Http\Message\ResponseInterface;

if (null !== $vendor = ConcreteImplementation::PSR7_VENDOR) {
    class_alias(Internal::class."\\{$vendor}\\{$vendor}Psr7Response", GenericPsr7Response::class);
} else {
    throw new \LogicException('Supported PSR-7 implementation not found, try running "composer require nyholm/psr7".');
}

if (false) {
    final class GenericPsr7Response implements ResponseInterface
    {
        public function __construct(int $code = 200, string $reasonPhrase = '')
        {
        }
    }
}
