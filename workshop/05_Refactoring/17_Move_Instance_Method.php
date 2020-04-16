<?php

namespace Refactoring17\Jetbrains;

/**
 * Move Instance Method
 *
 * F6 (Windows/Linux/macOS)
 *
 * Move an instance method to a parameter class or to a field class.
 */


class Message
{
    public $messageText;

    public function sendMessage(Sender $sender)
    {
        echo $this->messageText . ' ' . $sender->senderType;
    }

    public function createMessage(): AnotherMessage
    {
        return new AnotherMessage();
    }
}

class Sender
{
    public $senderType;

    // Move the sendMessage method to the Message parameter class. Notice that PhpStorm lets you set the visibility scope
    // and prompts to create a parameter replacing the `this` reference to the Sender class.
}

class AnotherMessage
{

    // Move the createMessage method to the Message parameter class. Notice that PhpStorm handles the `self` reference
    // to the AnotherMessage class.
}

// Notice how refactoring affects the below method calls.
$mySender = new Sender();
$myMessage = new Message();
$myAnotherMessage = new AnotherMessage();

$myMessage->sendMessage($mySender);
$myMessage->createMessage();
