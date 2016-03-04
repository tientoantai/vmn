<?php

namespace VMN\Auth;

use Illuminate\Database\Eloquent\Model;
use VMN\Contracts\Auth\Authenticable;
use VMN\Contracts\Auth\Credential;

class Member extends Model implements Authenticable
{
    /**
     * @return Credential
     */
    public function getCredential()
    {
        // TODO: Implement getCredential() method.
    }

}