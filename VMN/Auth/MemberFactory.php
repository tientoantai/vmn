<?php

namespace VMN\Auth;


class MemberFactory
{
    public function factory($memberRaw)
    {
        $member = new Member();
        $member->setAttribute('accountName', $memberRaw['username']);
        $member->setAttribute('firstName', $memberRaw['firstname']);
        $member->setAttribute('lastName', $memberRaw['lastname']);
        $member->setAttribute('DoB', $memberRaw['DoB']);
        $member->setAttribute('email', $memberRaw['email']);
        $member->setAttribute('gender', $memberRaw['gender']);
        return $member;
    }
}
