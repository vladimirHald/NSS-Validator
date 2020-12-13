<?php

namespace App\Services\NssValidation;


interface IFormatter {
    function format(string $format): string;
}