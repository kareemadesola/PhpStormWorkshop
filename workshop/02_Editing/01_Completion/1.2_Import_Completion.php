<?php
/**
 * Basic Completion With Import
 *
 * Ctrl+Space (Windows/Linux/macOS)
 *
 * Ctrl+Shift+Enter to complete statement (Windows/Linux)
 * Shift+Command+Enter to complete statement (macOS)
 *
 * When you use basic completion with classes or functions from outside this
 * namespace, the `use` statements are added automatically.
 */

namespace Editing1\JetBrains;

// 1. Make the class implement ICustomer (place the caret after implements)
//     Using basic completion will add
//         `use Navigation4\JetBrains\Customers\ICustomer;`

use Navigation4\JetBrains\Customers\ICustomer;

class ImportCompletion implements ICustomer
{
    /**
     * @inheritDoc
     */
    public function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @inheritDoc
     */
    public function setDiscount($discount)
    {
        // TODO: Implement setDiscount() method.
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        // TODO: Implement setName() method.
    }
}
