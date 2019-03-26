<?php

function checkIsValidPasswordPcre(string $str): bool
{
    $pattern = '/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z_]{8,})$/';
    return preg_match($pattern, $str) ? true : false;
}

var_dump(checkIsValidPasswordPcre('C00l_Pass'));
var_dump(checkIsValidPasswordPcre('SupperPas1'));
var_dump(checkIsValidPasswordPcre('Cool_pass'));
var_dump(checkIsValidPasswordPcre('C00l'));


