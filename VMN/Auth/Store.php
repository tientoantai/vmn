<?php

namespace VMN\Auth;

use VMN\Contracts\Auth\Authenticable;
use VMN\Contracts\Auth\Credential;

class Store implements Authenticable
{
    /**
     * @return Credential
     */
    public function getCredential()
    {
        // TODO: Implement getCredential() method.
    }

}