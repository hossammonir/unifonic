<?php

namespace HossamMonir\Unifonic\Concerns;

use Throwable;

abstract class Unifonic
{
    protected array $config;

    protected string $baseUrl;

    /**
     * @throws Throwable
     */
    public function __construct($config = null)
    {
        $this->initiateUnifonic($config);
    }

    /**
     * @throws Throwable
     */
    protected function initiateUnifonic(array $config = null): void
    {
        $this->baseUrl = 'https://el.cloud.unifonic.com';

        throw_if(
            ! config('unifonic.app_sid') || ! config('unifonic.sender_id'),
            new \Exception('Unifonic app_sid and sender_id are required')
        );

        // set default Configurations
        $config['SenderID'] = $config['SenderID'] ?? config('unifonic.sender_id');
        $config['AppSid'] = config('unifonic.app_sid');
        $config['CorrelationID'] = $this->CorrelationID();

        // Set optionals Configurations
        $this->config = $config;
    }

    /**
     * Generate Correlation ID
     *
     * @return string
     */
    private function correlationID(): string
    {
        return md5(microtime());
    }

    public function mapCreateSendMessage(): array
    {
        return $this->config;
    }
}
