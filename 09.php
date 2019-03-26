<?php

function checkIsValidPasswordPcre(string $str)
{
    $pattern = '/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z_]{8,})/';

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

var_dump(checkIsValidPasswordPcre('C00l_Pass'));
var_dump(checkIsValidPasswordPcre('SupperPas1'));
var_dump(checkIsValidPasswordPcre('Cool_pass'));
var_dump(checkIsValidPasswordPcre('C00l'));


