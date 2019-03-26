<?php

function checkIsValidNumberPcre(string $str)
{
    $pattern = '/([1-9]){1}(\d{5})/';

    $result = preg_match($pattern, $str, $matches);
    if ($result === 1 && $matches[0] === $str) {
        $result = true;
    } elseif ($result === 0 || ($result === 1 && $matches[0] !== $str)) {
        $result = false;
    } else {
        $result = 'Error';
    }

    return $result;
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


