<?php
/**
 * Pull Members Up / Push Members Down
 *
 * Move members from subclass to superclass or from superclass to subclass.
 */

namespace Refactoring12\JetBrains;

// 1. Pull the getName() function from SilverCustomer to Customer. Use Refactor This.
// 2. Push the calculateDiscount() down to Customer. Use Refactor This.
//    Note that the move will throw a problem detection because calculateDiscount() is used
//    in calling code and expected on the Customer class.
class Person
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }
}

class Customer extends Person
{

    public function calculateDiscount($amount)
    {
    }
}

class SilverCustomer extends Customer
{
}

$customer = new SilverCustomer();
$customer->getName();

$person = new Person();
$person->getName();
$person->calculateDiscount(100);
