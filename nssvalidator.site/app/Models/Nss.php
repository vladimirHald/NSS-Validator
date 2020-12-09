<?php

namespace App\Models;


class Nss {
    /** @var string $fullNssCode Full NSS Code */
    private $fullNssCode = "Undefined";
    /** @var mixed $sex 1 - male, 2 - female */
    private $sex = null;
    /** @var mixed $year Last two digits of the year of birth */
    private $year = null;
    /** @var mixed $month Is the month of birth. Usually from 01 to 12 */
    private $month = null;
    /** @var mixed $department Is the number of Department of origin. Can contain two digits or one digit and one char */
    private $department = null;
    /** @var mixed $comune  Is the commune of origin. Can contain 3 digits in metropolitan France or 2 digits for overseas*/
    private $comune = null;
    /** @var mixed $orderNumber Is an order number to distinguish people being born at the same place in the same year and month.*/
    private $orderNumber = null;
    /** @var mixed $controlKey Is the "control key", 01 to 97, equal to 97-(the rest of the number modulo 97) or to 97 if the number is a multiple of 97*/
    private $controlKey = null;

    function __construct($fullCode) {
        $this->fullNssCode = $fullCode;
       $this->sex = substr($fullCode, 0, 1);
       $this->year = substr($fullCode, 1, 2);
       $this->month = substr($fullCode, 3, 2);
       if(strstr($fullCode, "2a") || strstr($fullCode, "2b")) {
        $this->department = substr($fullCode, 5, 2);
        $this->comune = substr($fullCode, 7, 3);
       }
       else {
        $this->department = substr($fullCode, 5, 3);
        $this->comune = substr($fullCode, 8, 2);
       }
       $this->orderNumber = substr($fullCode, 10, 3);
       $this->controlKey = substr($fullCode, 13, 2);
       
    }
    function setFullNssCode($nssCode) {
        $this->fullNssCode = $nssCode;
    }

    function getFullNssCode() {
        return $this->fullNssCode;
    }

    function setSex($nssSex) {
        $this->nssSex = $nssSex;
    }

    function getSex() {
        return $this->nssSex;
    }

    function setYear($nssYear) {
        $this->nssYear = $nssYear;
    }

    function getYear() {
        return $this->nssYear;
    }

    function setMonth($nssMonth) {
        $this->nssMonth = $nssMonth;
    }

    function getMonth() {
        return $this->nssMonth;
    }

    function setDepartment($nssDepartment) {
        $this->nssDepartment = $nssDepartment;
    }

    function getDepartment() {
        return $this->nssDepartment;
    }

    function setComune($nssComune) {
        $this->nssComune = $nssComune;
    }

    function getComune() {
        return $this->nssComune;
    }

    function setOrderNumber($nssOrderNumber) {
        $this->nssOrderNumber = $nssOrderNumber;
    }

    function getOrderNumber() {
        return $this->nssOrderNumber;
    }

    function setControlKey($nssControlKey) {
        $this->nssControlKey = $nssControlKey;
    }

    function getControlKey() {
        return $this->nssControlKey;
    }
}
