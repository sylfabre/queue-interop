<?php
declare(strict_types=1);

namespace Interop\Queue\Test;

use Interop\Queue\DestinationBasic;
use Interop\Queue\Queue;
use Interop\Queue\Topic;
use PHPUnit\Framework\TestCase;

abstract class DestinationBasicTestCase extends TestCase
{
    public abstract function getDestination(string $name): DestinationBasic;

    public function testShouldImplementsTopicAndQueueInterfaces()
    {
        $destination = $this->getDestination('aDestination');

        $this->assertInstanceOf(Topic::class, $destination);
        $this->assertInstanceOf(Queue::class, $destination);
    }

    public function testShouldReturnNameSetInConstructor()
    {
        $destination = $this->getDestination('aDestinationName');

        $this->assertSame('aDestinationName', $destination->getName());
        $this->assertSame('aDestinationName', $destination->getQueueName());
        $this->assertSame('aDestinationName', $destination->getTopicName());
    }
}
