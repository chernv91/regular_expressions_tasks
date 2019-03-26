<?php

function checkIsGuidPcre(string $str): bool
{
    $pattern = '/^\{?([a-fA-F\d]){8}-([a-fA-F\d]){4}-([a-fA-F\d]){4}-([a-fA-F\d]){4}-([a-fA-F\d]){12}\}?$/';
    return preg_match($pattern, $str) ? true : false;
}

function checkIsGuidPhp(string $str): bool
{
    $result = false;

    if ($str[0] === '{' && $str[strlen($str) - 1] === '}') {
        $str = substr($str, 1, -1);
    }

    if ($str[0] !== '{' && $str[strlen($str) - 1] !== '}') {
        $result = true;
        $guidParts = explode('-', $str);

        if (count($guidParts) === 5 &&
            strlen($guidParts[0]) === 8 &&
            strlen($guidParts[1]) === 4 &&
            strlen($guidParts[2]) === 4 &&
            strlen($guidParts[3]) === 4 &&
            strlen($guidParts[4]) === 12) {

            foreach ($guidParts as $guidPart) {

                if (!ctype_xdigit($guidPart)) {
                    $result = false;
                    break;
                }

            }

        } else {
            $result = false;
        }

    }

    return $result;
}

var_dump(checkIsGuidPcre('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPcre('e02fd0e4-00fd-090A-ca30-0d00a0038ba0'));
var_dump(checkIsGuidPcre('02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPcre('e02fd0e400fd090Aca300d00a0038ba0'));

var_dump(checkIsGuidPhp('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPhp('e02fd0e4-00fd-090A-ca30-0d00a0038ba0'));
var_dump(checkIsGuidPhp('02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPhp('e02fd0e400fd090Aca300d00a0038ba0'));

