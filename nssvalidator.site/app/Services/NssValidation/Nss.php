<?php

namespace App\Services\NssValidation;


use App\Services\NssValidation\NssExceptions;
use Illuminate\Support\Str;

class Nss
{
    /** @var string $fullNssCode Full NSS Code */
    private $fullNssCode = "Undefined";
    /** @var int $sex 1 - male, 2 - female */
    private $sex = 0;
    /** @var int $year Last two digits of the year of birth */
    private $year = 0;
    /** @var int $month Is the month of birth. Usually from 01 to 12 */
    private $month = 0;
    /** @var mixed $department Is the number of Department of origin. Can contain two digits or one digit and one char */
    private $department = null;
    /** @var int $comune  Is the commune of origin. Can contain 3 digits in metropolitan France or 2 digits for overseas*/
    private $comune = 0;
    /** @var int $orderNumber Is an order number to distinguish people being born at the same place in the same year and month.*/
    private $orderNumber = 0;
    /** @var int $controlKey Is the "control key", 01 to 97, equal to 97-(the rest of the number modulo 97) or to 97 if the number is a multiple of 97*/
    private $controlKey = 0; 
    /** @var bool $isTemporary */
    private $isTemporary = false;
    
    private $checkSum = 0;

    private $exceptions;

    public const CORSICA_2A_CORRECT_NUMBER = 1000000;
    public const CORSICA_2B_CORRECT_NUMBER = 2000000;

    function __construct($fullCode)
    {
        
        $this->exceptions = new NssExceptions();
        $this->detectTemporary($fullCode);
        $this->detectCorsica($fullCode);
        $departmentNumberCount = $this->getDepartmentNumberOfSigns();
        $this->fullNssCode = $fullCode;
        $this->sex = substr($fullCode, 0, 1);
        $this->year = substr($fullCode, 1, 2);
        $this->month = substr($fullCode, 3, 2);
        $this->department = substr($fullCode, 5, $departmentNumberCount);
        $this->comune = substr($fullCode, 11 - $departmentNumberCount, $departmentNumberCount == 3? 2 : 3);
        $this->orderNumber = substr($fullCode, 10, 3);
        $this->controlKey = substr($fullCode, 13, 2);
        $this->setChecksum($fullCode);
    }

    function getFullNssCode()
    {
        return $this->fullNssCode;
    }

    function getSex()
    {
        return $this->sex;
    }

    function getYear()
    {
        return $this->year;
    }

    function getMonth()
    {
        return $this->month;
    }

    function getDepartment()
    {
        return $this->department;
    }

    function getComune()
    {
        return $this->comune;
    }

    function getOrderNumber()
    {
        return $this->orderNumber;
    }

    function getControlKey()
    {
        return $this->controlKey;
    }
    
    function isTemporary() {
        return $this->isTemporary;
    }

    function detectTemporary($fullCode) {
        if(Str::endsWith($fullCode, '99')) {
            $nineCount = Str::substrCount(substr($fullCode, 4, 11), "9");
            if($nineCount == 10)
                $this->exceptions->add(NssExceptions::TempNoFrance);
            else if($nineCount == 8)
                $this->exceptions->add(NssExceptions::TempMainFrance);
            else if($nineCount == 7)
                $this->exceptions->add(NssExceptions::TempOverseas);
        }
    }

    function getDepartmentNumberOfSigns() {
       return $this->exceptions->has(NssExceptions::TempOverseas) ? 3 : 2;
    }

    function detectCorsica($fullCode) {
        if (strstr($fullCode, "2a"))
            $this->exceptions->add(NssExceptions::Corsica2a);
        else if(strstr($fullCode, "2b"))
            $this->exceptions->add(NssExceptions::Corsica2b);
    }

    function isCorsica(): bool {
        return $this->exceptions->has(NssExceptions::Corsica2a)
               || $this->exceptions->has(NssExceptions::Corsica2b);
    }

    function isCorsica2a(): bool {
        return $this->exceptions->has(NssExceptions::Corsica2a);
    }

    function isCorsica2b(): bool {
        return $this->exceptions->has(NssExceptions::Corsica2b);
    }
    
    function setChecksum($fullCode) {
            $correctNumber = 0;
            if($this->isCorsica()) {
                $fullCode = substr($fullCode, 0, 6) . '0' . substr($fullCode, 7);
                $correctNumber = $this->isCorsica2a() ? self::CORSICA_2A_CORRECT_NUMBER : self::CORSICA_2B_CORRECT_NUMBER;
            }
            $this->checkSum = 97 - (($fullCode - $correctNumber) % 97);
    }
}
