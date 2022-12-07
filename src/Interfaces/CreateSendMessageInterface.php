<?php

namespace HossamMonir\Unifonic\Interfaces;

interface CreateSendMessageInterface
{
    public function setSenderId(string $senderId = null): static;

    public function setBody(string $messageBody): static;

    public function setRecipient(int $recipientNumber): static;

    public function send();
}
