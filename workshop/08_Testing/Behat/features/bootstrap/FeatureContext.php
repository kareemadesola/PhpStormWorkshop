<?php

use Behat\Behat\Context\Context;

class FeatureContext implements Context
{
    /**
     * @Given some circumstances
     */
    public function passes()
    {
        return true;
    }
}
