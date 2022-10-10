<?php

/*
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfPHP\GenericImplementations\Internal\PhpHttpCurl;

use FriendsOfPHP\GenericImplementations\GenericPsr17Factory;
use Http\Client\Curl\Client;

/**
 * @internal
 */
class PhpHttpCurlHttplugClient extends Client
{
    public function __construct()
    {
        $factory = new GenericPsr17Factory();

        parent::__construct($factory, $factory);
    }
}
