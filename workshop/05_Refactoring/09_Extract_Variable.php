<?php
/**
 * Extract Variable
 *
 * Ctrl+Alt+V (Windows/Linux)
 * Alt+Command+V (macOS)
 *
 * Put the result of a selected expression into a variable. The original expression is replaced with the new variable.
 */

namespace Refactoring\JetBrains;

class Blog
{
    protected string $blogName = 'My Blog';
    protected string $blogSubtitle = 'Just another blog';

    public function renderHeader()
    {
        // 1. Place the caret on blogSubtitle.
        //    Extract the "{$this->blogName} - {$this->blogSubtitle}" string into a variable called $title.
        //    Note the IDE asks us which expression should be extracted. Select the entire string.
        echo '<title>';
        $title = "{$this->blogName} - {$this->blogSubtitle}";
        echo $title ;
        echo '</title>';

        echo '<h1>';
        echo $title;
        echo '</h1>';
    }
}
