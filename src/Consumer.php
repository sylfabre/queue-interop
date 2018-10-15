<?php
declare(strict_types=1);

namespace Interop\Queue;

/**
 * A client uses a MessageConsumer object to receive messages from a destination.
 * A MessageConsumer object is created by passing a Destination object
 * to a message-consumer creation method supplied by a session.
 *
 * This consumer works only in auto acknoledgement mode hence if consumer crashes then the message is lost
 *
 * @see https://docs.oracle.com/javaee/7/api/javax/jms/MessageConsumer.html
 */
interface Consumer
{
    /**
     * Gets the Queue associated with this queue receiver.
     */
    public function getQueue(): Queue;

    /**
     * Receives the next message that arrives within the specified timeout interval.
     * This call blocks until a message arrives, the timeout expires, or this message consumer is closed.
     * A timeout of zero never expires, and the call blocks indefinitely.
     *
     * Timeout is in milliseconds
     */
    public function receive(int $timeout = 0): ?Message;

    /**
     * Receives the next message if one is immediately available.
     */
    public function receiveNoWait(): ?Message;

    /**
     * Requeue the message into the MQ broker.
     */
    public function requeue(Message $message): void;
}