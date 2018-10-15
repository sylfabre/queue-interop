<?php
declare(strict_types=1);

namespace Interop\Queue;

/**
 * This is an extension of the default consumer with a manual acknoledgement mode hence if consumer crashes then the message is put back in the queue
 */
interface ConsumerWithAcknoledgement extends Consumer
{
    /**
     * Tell the MQ broker that the message was processed successfully.
     */
    public function acknowledge(Message $message): void;

    /**
     * Tell the MQ broker that the message was rejected.
     */
    public function reject(Message $message): void;
}