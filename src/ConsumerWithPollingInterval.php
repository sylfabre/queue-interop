<?php
declare(strict_types=1);

namespace Interop\Queue;

/**
 * A client uses a MessageConsumer object to receive messages from a destination.
 * A MessageConsumer object is created by passing a Destination object
 * to a message-consumer creation method supplied by a session.
 *
 * @see https://docs.oracle.com/javaee/7/api/javax/jms/MessageConsumer.html
 */
interface ConsumerWithPollingInterval
{
    /**
     * Set polling interval in milliseconds.
     */
    public function setPollingInterval(int $msec): void;

    /**
     * Get polling interval in milliseconds.
     */
    public function getPollingInterval(): int;
}