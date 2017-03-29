<?php

namespace Acme\Users;

/**
 * Person class
 */
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}