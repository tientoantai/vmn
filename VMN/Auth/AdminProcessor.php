<?php

namespace VMN\Auth;


use VMN\Contracts\Auth\Credential;

class AdminProcessor
{
    public function proceedRegister(Credential $credential, $status)
    {
        $credential->setStatus($status);
        $credential->save();
    }

    public function changeStatus(Credential $credential)
    {
        if ($credential->getStatus() == 'active')
        {
            $credential->setStatus('inactive');
        }
        elseif($credential->getStatus('inactive'))
        {
            $credential->setStatus('active');
        }
        $credential->save();
    }

    public function changeRole(Credential $credential, $role)
    {
        $credential->setRole($role);
        $credential->save();
    }
}