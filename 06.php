<?php
function checkIsValidDatePcre(string $str)
{
    $pattern = '/(\d){2}\/(\d){2}\/(\d){4}/';
    $result = preg_match($pattern, $str, $matches);
    if ($result === 1 && $matches[0] === $str) {
        $dateParts = explode('/', $str);
        if ($dateParts[2] >= 1600 && $dateParts[2] <= 9999 && checkdate($dateParts[1],
                $dateParts[0], $dateParts[2])) {
            $result = true;
        } else {
            $result = false;
        }
    } elseif ($result === 0 || ($result === 1 && $matches[0] !== $str)) {
        $result = false;
    } else {
        $result = 'Error';
    }
    return $result;
}
function checkIsValidDatePhp(string $str): bool
{
    $result = '';
    if (strlen($str) === 10) {
        $dateParts = explode('/', $str);
        foreach ($dateParts as $part) {
            if (!is_numeric($part)) {
                $result = false;
                break;
            }
        }
        if ($result !== false && count($dateParts) === 3 && ($dateParts[2] >= 1600 && $dateParts[2] <= 9999) && checkdate($dateParts[1],
                $dateParts[0], $dateParts[2])) {
            $result = true;
        }
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