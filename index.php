<?php

require "vendor/autoload.php";

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$andrew = new Person('Andrew Skigar');

$staff = new Staff([$andrew]);

$acme = new Business($staff);

$acme->hire(new Person('Jane Doe'));
$acme->hire(new Person('Jone Doe'));

var_dump($acme->getStuffMembers());
