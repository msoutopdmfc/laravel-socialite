<?php

namespace Msoutopdmfc\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use Msoutopdmfc\Socialite\Contracts\Factory;

/**
 * @method static \Msoutopdmfc\Socialite\Contracts\Provider driver(string $driver = null)
 * @see \Msoutopdmfc\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
