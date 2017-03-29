<?php

namespace Acme;

use Acme\Users\Person;

/**
 * Business class
 */
class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStuffMembers()
    {
        return $this->staff->members();
    }

}