<?php
declare(strict_types=1);

namespace Interop\Queue\Tests;

use Interop\Queue\ConsumerWithVisibilityTimeout;
use Interop\Queue\ConsumerWithVisibilityTimeoutTrait;
use PHPUnit\Framework\TestCase;

class ConsumerWithVisibilityTimeoutTraitTest extends TestCase
{
    public function testShouldSetAndGetVisibilityTimeout()
    {
        $consumer = new ConsumerWithVisibilityTimeoutTraitTest_Class();
        $consumer->setVisibilityTimeout(10);

        $this->assertSame(10, $consumer->getVisibilityTimeout());
    }
}

class ConsumerWithVisibilityTimeoutTraitTest_Class implements ConsumerWithVisibilityTimeout
{
    use ConsumerWithVisibilityTimeoutTrait;
}
