<?php

namespace Testing\JetBrains;

require_once 'Code/Queue.php';

use PHPUnit\Framework\TestCase;
use Testing\JetBrains\Queue;

class QueueTest extends TestCase
{
    /**
     * @var \Testing\JetBrains\Queue
     */
    protected \Testing\JetBrains\Queue $_queue;

    /**
     *
     */
    public function setUp()
    {
        $this->_queue = new  Queue();
    }

    public function testEnqueueIncreasesItemCount()
    {
        $this->_queue->enqueue('test');
        $this->assertEquals(1, $this->_queue->getNumberOfItems());
    }

    public function testPeekReturnsNullWhenNoItemsInQueue()
    {
        $result = $this->_queue->peek();
        $this->assertNull($result);
    }

    public function testPeekReturnsItemWhenItemsInQueue()
    {
        $this->_queue->enqueue('test');
        $result = $this->_queue->peek();
        $this->assertEquals('test', $result);
    }
}
