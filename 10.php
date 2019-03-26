<?php

function checkIsValidNumberPcre(string $str): bool
{
    $pattern = '/^[1-9][\d]{5}$/';
    return preg_match($pattern, $str) ? true : false;
}

function checkIsValidNumberPhp(string $str): bool
{
    $result = false;

    if (is_numeric($str) && strlen($str) === 6 && $str[0] !== '0') {
        $result = true;
    }

    return $result;
}

var_dump(checkIsValidNumberPcre('123456'));
var_dump(checkIsValidNumberPcre('234567'));
var_dump(checkIsValidNumberPcre('1234567'));
var_dump(checkIsValidNumberPcre('12345'));
var_dump(checkIsValidNumberPhp('123456'));
var_dump(checkIsValidNumberPhp('234567'));
var_dump(checkIsValidNumberPhp('1234567'));
var_dump(checkIsValidNumberPhp('12345'));


