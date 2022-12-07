<?php

namespace HossamMonir\Unifonic;

use HossamMonir\Unifonic\Services\CreateSendMessage;

class UnifonicServices
{
    private string $senderID;

    private string $body;

    private int $recipient;

    /**
     * Set Sender ID
     *
     * @param  string|null  $senderId
     * @return $this
     */
    public function setSenderId(string $senderId = null): static
    {
        $this->senderID = $senderId;

        return $this;
    }

    /**
     * Set Message Body.
     *
     * @param  string  $messageBody
     * @return $this
     */
    public function setBody(string $messageBody): static
    {
        $this->body = $messageBody;

        return $this;
    }

    /**
     * Set Recipient Mobile Number
     *
     * @param  int  $recipientNumber
     * @return $this
     */
    public function setRecipient(int $recipientNumber): static
    {
        $this->recipient = $recipientNumber;

        return $this;
    }

    /**
     * Sent SMS Message.
     *
     * @return array
     */
    public function send(): array
    {
        return ( new CreateSendMessage() )
            ->setBody($this->body)
            ->setRecipient($this->recipient)
            ->setSenderId($this->senderID)
            ->send();
    }
}
