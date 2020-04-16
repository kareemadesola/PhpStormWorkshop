<?php
/**
 * Make Static
 *
 * Make method static.
 */

namespace Refactoring16\JetBrains;

// 1. Make method split static.
class Splitter
{
    private $delimiter;

    public function __construct($delimiter)
    {
        $this->delimiter = $delimiter;
    }

    /**
     * @param $subject
     * @param Splitter $instance
     * @return array
     */
    public static function split($subject, $instance)
    {
        return explode($instance->delimiter, $subject);
    }
}

// 2. Note that calls to Splitter::split() have updated to static calls
// as well as a new argument with instance being provided.
$splitter = new Splitter(' ');
$myArray = Splitter::split('This is a test', $splitter);
$myCsvRecord = Splitter::split('PhpStorm JetBrains', $splitter);
