<?php

namespace Msoutopdmfc\Socialite\Two;

interface ProviderInterface
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Msoutopdmfc\Socialite\Two\User
     */
    public function user();
}
