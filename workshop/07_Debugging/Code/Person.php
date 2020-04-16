<?php
namespace Debugging\JetBrains;

/**
 * Class Customer. Represents a person who has a name and age.
 *
 * @package Debugging\JetBrains
 */

/**
 * @property string Address Address of the person
 * @property string Country Customer country
 */

class Person
{
    protected $_name;
    protected $_age;

    // review: what would be the best default age to use here?
    public function __construct($name, $age = 30)
    {
        $this->_name = $name;
        $this->_age = $age;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function getAge()
    {
        return $this->_age;
    }
}
