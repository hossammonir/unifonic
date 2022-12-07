<?php

namespace HossamMonir\Unifonic\Facades;

use HossamMonir\Unifonic\UnifonicServices;
use Illuminate\Support\Facades\Facade;

/**
 * Class Unifonic
 *
 * @mixin \HossamMonir\Unifonic\UnifonicServices
 */
class Unifonic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return UnifonicServices::class;
    }
}
