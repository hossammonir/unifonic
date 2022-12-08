<?php

namespace HossamMonir\Unifonic\Services;

use HossamMonir\Unifonic\Concerns\Unifonic;
use HossamMonir\Unifonic\Interfaces\CreateSendMessageInterface;
use HossamMonir\Unifonic\Traits\Processor;

class CreateSendMessage extends Unifonic implements CreateSendMessageInterface
{
    use Processor;

    public function __construct(array $config = null)
    {
        // Call parent constructor to initialize common settings
        parent::__construct($config);
    }

    /**
     * Set Sender ID
     *
     * @param  string|null  $senderId
     * @return $this
     */
    public function setSenderId(string $senderId = null): static
    {
        $this->config['SenderID'] = $senderId;

        return $this;
    }

    /**
     * Set Message Body
     *
     * @param  string  $messageBody
     * @return $this
     */
    public function setBody(string $messageBody): static
    {
        $this->config['Body'] = $messageBody;

        return $this;
    }


    /**
     * Enable Async Sending
     *
     * @return $this
     */
    public function withAsync(): static
    {
        $this->config['async'] = true;

        return $this;
    }

    /**
     * Set Recipients Mobile Number
     *
     * @param  string  $recipientNumber
     * @return $this
     */
    public function setRecipient(string $recipientNumber): static
    {
        $this->config['Recipient'] = $recipientNumber;

        return $this;
    }

    /**
     * Process the request.
     *
     * @return array
     */
    public function send(): array
    {
        return $this->createSendMessage();
    }
}
