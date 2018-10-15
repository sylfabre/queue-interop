<?php
declare(strict_types=1);

namespace Interop\Queue;

trait ConsumerWithPollingIntervalTrait
{

    /**
     * Polling interval in milliseconds
     * @var integer
     */
    protected $pollingInterval = 1000;

    /**
     * Set polling interval in milliseconds.
     */
    public function setPollingInterval(int $msec): void
    {
        $this->pollingInterval = $msec;
    }

    /**
     * Get polling interval in milliseconds.
     */
    public function getPollingInterval(): int
    {
        return $this->pollingInterval;
    }

    public function receive(int $timeout = 0): ?Message
    {
        $timeout *= 1000; // from milliseconds to microseconds
        $startAt = microtime(true);

        while(true) {
            $message = $this->receiveNoWait();

            if($message) {
                return $message;
            }

            if($timeout) {

                $timeLeft =  microtime(true) - $startAt - $timeout;

                // No time left to wait
                if($timeLeft <= 0) {
                    return null;
                }

                // We pay attention not to wait too long to go over the timeout limit
                usleep(min($timeLeft, $this->pollingInterval * 1000));

            } else {
                usleep($this->pollingInterval * 1000);
            }

        }
    }

}