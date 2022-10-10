<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations;

use FriendsOfPHP\GenericImplementations\Internal\ConcreteImplementation;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;

if (null !== $vendor = ConcreteImplementation::HTTPLUG_VENDOR) {
    class_alias(Internal::class."\\{$vendor}\\{$vendor}HttplugClient", GenericHttplugClient::class);
} else {
    throw new \LogicException('Supported Httplug implementation not found, try running "composer require symfony/http-client".');
}

if (false) {
    final class GenericHttplugClient implements HttpClient, HttpAsyncClient
    {
        public function __construct()
        {
        }
    }
}
