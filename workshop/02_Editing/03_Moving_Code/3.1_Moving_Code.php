<?php
/**
 * Moving Code
 *
 * Move Line Up/Down:
 *
 * Shift+Alt+Up / Shift+Alt+Down (Windows/Linux/macOS)
 *
 * Moves a line up or down
 *
 * Move Statement Up/Down
 *
 * Shift+Ctrl+Up / Shift+Ctrl+Down (Windows/Linux)
 * Shift+Command+Up / Shift+Command+Down (macOS)
 *
 * Moves the entire statement up or down
 */

namespace Editing3\JetBrains;

class MovingCode
{
    // 1. Order the lines using move line up / down.
    public function moveLine()
    {
        $numberOne = 1;
        $numberTwo = 2;
        $numberThree = 3;
        $numberFour = 4;
        $numberFive = 5;
    }

    // 2. Order the if statements using move statement up / down.
    public function moveStatement()
    {
        if (1 == 1) {
            // ...
            echo 'Number one';
        }
        if (2 == 2) {
            // ...
            echo 'Number two';
        }
        if (3 == 3) {
            // ...
            echo 'Number three';
        }
    }
}
