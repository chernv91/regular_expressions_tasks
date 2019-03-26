<?php

function checkIsValidDatePcre(string $str): bool
{
    $pattern = '/^(\d){2}\/(\d){2}\/(\d){4}$/';
    $result = preg_match($pattern, $str);

    if ($result) {
        $dateParts = explode('/', $str);

        if ($dateParts[2] >= 1600 && $dateParts[2] <= 9999 && checkdate($dateParts[1], $dateParts[0], $dateParts[2])) {
            $result = true;
        } else {
            $result = false;
        }

    }

    return $result;
}

function checkIsValidDatePhp(string $str): bool
{
    $date = date_create_from_format('d/m/Y', $str);

    if ($date && strlen($str) === 10) {
        $dateParts = explode('/', $str);

        if ($dateParts[2] >= 1600 && $dateParts[2] <= 9999 && checkdate($dateParts[1], $dateParts[0], $dateParts[2])) {
            $result = true;
        } else {
            $result = false;
        }

    } else {
        $result = false;
    }

    return $result;
}

var_dump(checkIsValidDatePcre('29/02/2000'));
var_dump(checkIsValidDatePcre('30/04/2003'));
var_dump(checkIsValidDatePcre('01/01/2003'));
var_dump(checkIsValidDatePcre('29/02/2001'));
var_dump(checkIsValidDatePcre('30-04-2003'));
var_dump(checkIsValidDatePcre('1/1/1899'));

var_dump(checkIsValidDatePhp('29/02/2000'));
var_dump(checkIsValidDatePhp('30/04/2003'));
var_dump(checkIsValidDatePhp('01/01/2003'));
var_dump(checkIsValidDatePhp('29/02/2001'));
var_dump(checkIsValidDatePhp('30-04-2003'));
var_dump(checkIsValidDatePhp('1/1/1899'));