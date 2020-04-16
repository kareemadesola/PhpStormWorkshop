<?php
/**
 * Extract Method
 *
 * Ctrl+Alt+M (Windows/Linux)
 * Alt+Command+M (macOS)
 *
 * Extract a block of code into a method, detecting variables.
 */

namespace Refactoring7\JetBrains;

// 1. Select the last 3 lines of the following code and use Extract Method.
//    Apply the Extract method refactoring and name it "reverseString". The $name argument can be named $stringToReverse.
$name = 'Eddie';
$nameBackwards = '';
/**
 * @param string $stringToReverse
 * @param string $nameBackwards
 */
function reverString(string $stringToReverse, string $nameBackwards): void
{
    for ($i = 0; $i < strlen($stringToReverse); $i++) {
        $nameBackwards = substr($stringToReverse, $i, 1) . $nameBackwards;
    }
}

reverString($name, $nameBackwards);

class Bootstrap
{
    public function run()
    {
        // 2. Select the following lines of code and extract them into a method called initialize(). Make it a public function.
        //    Note that the IDE detects the $databaseName and $database variable are required and are returned from the function.

        // Initialize settings
        list($databaseName, $database) = $this->initialize();

        // 3. Select the following lines of code and extract them into a method called createDatabase(). Make it protected.
        //    Note that the IDE detects the $databaseName and $database arguments are required and are added to the function.

        // Create database
        $this->createDatabase($databaseName, $database);

        // 4. Select the following lines of code and extract them into a method called sendEmail(). Make it protected.
        //    Note that the IDE detects the $databaseName variable is required and are returned from the function.

        // Send out e-mail
        list($body, $to) = $this->sendEmail($databaseName);
        mail($to, 'Database created', $body);
    }

    /**
     * @return array
     */
    public function initialize(): array
    {
        $databaseName = 'sample';
        $database = mysqli_connect('localhost', 'root', '');
        return array($databaseName, $database);
    }

    /**
     * @param $databaseName
     * @param $database
     */
    protected function createDatabase($databaseName, $database): void
    {
        $query = "CREATE DATABASE $databaseName";
        mysqli_query($database, $query);
    }

    /**
     * @param $databaseName
     * @return array
     */
    protected function sendEmail($databaseName): array
    {
        $body = 'The database ' . $databaseName . ' has been created!';
        $to = 'frankie.mouse@magrathea.org';
        return array($body, $to);
    }
}
