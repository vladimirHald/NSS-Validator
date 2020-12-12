<?php

namespace App\Services\NssValidation;

class NssExceptions {
    public const TemporaryOutOfFrance = 'TemporaryOutOfFrance';
    public const TemporaryFrance = 'TemporaryFrance';
    public const TemporaryFranceOverseasCollectivity = 'TemporaryFranceOverseasCollectivity';
    public const UnknownMonth = 'UnknownMonth';
    public const Corsica2a = 'Corsica2a';
    public const Corsica2b = 'Corsica2b';
    public const TempNoFrance = 'TempNoFrance';
    public const TempMainFrance = 'TempMainFrance';
    public const TempOverseas = 'TempOverseas';

    private $exceptions = [];

    public function add(string $exception) {
        $this->exceptions[] = $exception;
    }

    public function has(string $exception) {
        return in_array($exception, $this->exceptions, true);
    }
}