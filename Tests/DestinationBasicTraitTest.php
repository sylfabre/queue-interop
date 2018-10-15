<?php
declare(strict_types=1);

namespace Interop\Queue\Tests;

use Interop\Queue\DestinationBasic;
use Interop\Queue\DestinationBasicTrait;
use Interop\Queue\Test\DestinationBasicTestCase;

class DestinationBasicTraitTestCase extends DestinationBasicTestCase
{
    public function getDestination(string $name): DestinationBasic
    {
        return new DestinationBasicTraitTest_Class($name);
    }
}

class DestinationBasicTraitTest_Class implements DestinationBasic
{
    use DestinationBasicTrait;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
