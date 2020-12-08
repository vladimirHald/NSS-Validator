<?php

namespace App\Models;


class Nss {
    /** @var string $fullNssCode Full NSS Code */
    private $fullNssCode = "Undefined";
    /** @var mixed $nssSex 1 - male, 2 - female */
    private $nssSex = null;
    /** @var mixed $nssYear Last two digits of the year of birth */
    private $nssYear = null;
    /** @var mixed $nssMonth Is the month of birth. Usually from 01 to 12 */
    private $nssMonth = null;
    /** @var mixed $nssDepartment Is the number of Department of origin. Can contain two digits or one digit and one char */
    private $nssDepartment = null;
    /** @var mixed $nssCommune  Is the commune of origin. Can contain 3 digits in metropolitan France or 2 digits for overseas*/
    private $nssComune = null;
    /** @var mixed $nssOrderNumber Is an order number to distinguish people being born at the same place in the same year and month.*/
    private $nssOrderNumber = null;
    /** @var mixed $nssControlKey Is the "control key", 01 to 97, equal to 97-(the rest of the number modulo 97) or to 97 if the number is a multiple of 97*/
    private $nssControlKey = null;

    function Nss($fullNssCode, $nssSex, $nssYear, $nssMonth, $nssDepartment, $nssComune, $nssOrderNumber, $nssControlKey) {
        $this->fullNssCode = $fullNssCode;
        $this->nssSex = $nssSex;
        $this->nssYear = $nssYear;
        $this->nssMonth =  $nssMonth;
        $this->nssDepartment = $nssDepartment;
        $this->nssComune =$nssComune;
        $this->nssOrderNumber =  $nssOrderNumber;
        $this->nssControlKey = $nssControlKey;
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
