<?php

namespace Matthewbdaly\SMS\Contracts;

interface Driver
{
    /**
     * Get driver name.
     *
     * @return string
     */
    public function getDriver(): string;

    /**
     * Get endpoint URL.
     *
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * Send the SMS.
     *
     * @param array $message An array containing the message.
     *
     * @return bool
     */
    public function sendRequest(array $message): bool;
}
