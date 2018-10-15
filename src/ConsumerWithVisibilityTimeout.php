<?php
declare(strict_types=1);

namespace Interop\Queue;

/**
 * This is an extension of the manual acknoledgement mode. Once fetched, the message is invisible to other consumers for a configurable period of time
 */
interface ConsumerWithVisibilityTimeout extends ConsumerWithAcknoledgement
{
    public function getVisibilityTimeout(): ?int;

    /**
     * The duration (in seconds) that the received messages are hidden from subsequent retrieve
     * requests after being retrieved by a ReceiveMessage request.
     */
    public function setVisibilityTimeout(int $visibilityTimeout = null): void;
}