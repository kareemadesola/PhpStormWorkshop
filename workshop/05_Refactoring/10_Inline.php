<?php
/**
 * Inline
 *
 * Ctrl+Alt+N (Windows/Linux)
 * Alt+Command+N (macOS)
 *
 * Replace redundant variables, functions, or methods with the full expression. It is the opposite of the Extract refactoring.
 */

namespace Refactoring\JetBrains;

// 1. Place the caret over $name and inline the variable.
echo 'Benji';


// 2. Place the caret over printName() and inline the function.
echo "John";
