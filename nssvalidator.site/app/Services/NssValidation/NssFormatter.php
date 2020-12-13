<?php

namespace App\Services\NssValidation;

use App\Services\NssValidation\BaseFormatter;

class NssFormatter extends BaseFormatter {

    private Nss $nss;

    public function __construct(Nss $nss)
    {
        $this->nss = $nss;
    }

    protected function replacementRules(): array
    {
        return [
            'S'         => $this->nss->getSex(),
            'YY'        => $this->nss->getYear(),
            'YYYY'      => $this->nss->getFullYear(),
            'M'         => $this->nss->getMonthWithoutZero(),
            'MM'        => $this->nss->getMonth(),
            'D'         => $this->nss->getDepartment(),
            'O'         => $this->nss->getComune(),
            'K'         => $this->nss->getOrderNumber(),
            'C'         => $this->nss->getControlKey()
        ];
    }
}