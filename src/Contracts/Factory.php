<?php

namespace Msoutopdmfc\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Msoutopdmfc\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
