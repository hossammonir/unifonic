<?php

namespace HossamMonir\Unifonic\Traits;

use Illuminate\Support\Facades\Http;

trait Processor
{
    /**
     * Send [CreateSendMessage] Request to Unifonic API.
     *
     * @return array
     */
    public function createSendMessage(): array
    {
        return Http::baseUrl($this->baseUrl)
            ->asForm()
            ->post('/rest/SMS/messages', $this->mapCreateSendMessage())
            ->json();
    }
}
