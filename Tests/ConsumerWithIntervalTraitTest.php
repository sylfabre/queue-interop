<?php
declare(strict_types=1);

namespace Interop\Queue\Tests;

use Interop\Queue\ConsumerWithPollingInterval;
use Interop\Queue\ConsumerWithPollingIntervalTrait;
use PHPUnit\Framework\TestCase;

class ConsumerWithIntervalTraitTest extends TestCase
{
    public function testShouldSetAndGetVisibilityTimeout()
    {
        $consumer = new ConsumerWithPollingIntervalTraitTest_Class();
        $consumer->setPollingInterval(10);

        $this->assertSame(10, $consumer->getPollingInterval());
    }
}

class ConsumerWithPollingIntervalTraitTest_Class implements ConsumerWithPollingInterval
{
    use ConsumerWithPollingIntervalTrait;
}
