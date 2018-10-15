<?php
declare(strict_types=1);

namespace Interop\Queue;

/**
 * A DestinationBasic object encapsulates a provider-specific address
 * where Queues and Topics are used the same way.
 *
 * @see https://docs.oracle.com/javaee/7/api/javax/jms/Destination.html
 */
interface DestinationBasic extends Queue, Topic
{
    public function getName(): string;
}