<?php

namespace App\Services\NssValidation;

use App\Services\NssValidation\IFormatter;
use Illuminate\Support\Collection;

abstract class BaseFormatter implements IFormatter {

    public function format(string $format): string {
        $replacementRules = (new Collection($this->replacementRules()))->sortKeysDesc()->toArray();

        return str_replace(
            array_keys($replacementRules),
            array_values($replacementRules),
            $format
        );
    }

    abstract protected function replacementRules(): array;

}