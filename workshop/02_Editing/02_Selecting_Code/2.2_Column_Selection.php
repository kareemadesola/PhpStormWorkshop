<?php
/**
 * Column Selection Mode
 *
 * Alt+Shift+Insert (Windows/Linux)
 * Shift+Command+8 (macOS)
 *
 * Toggle column selection (allows editing multiple lines in one go)
 *
 * You can also press Shift+Alt and drag the mouse to perform column selection without entering the Column Selection Mode.
 */

namespace Editing2\JetBrains;

class ColumnSelection
{
    // 1. Enable Column selection Mode.
    // 2. Draw a rectangle over the $someVariable column.
    // 3. Rename the variable to $foo.
    // 2. Disable Column Selection Mode.
    
    public function columnSelection()
    {
        $foo = 3;
        $foo = 6;
        $foo = 9;
        $foo = 'a';
        $foo = 'b';
        $foo = 'c';
    }
}
