<?php

function checkIsGuidPcre(string $str)
{
    $pattern = '/\{?([a-fA-F0-9]){8}-([a-fA-F0-9]){4}-([a-fA-F0-9]){4}-([a-fA-F0-9]){4}-([a-fA-F0-9]){12}\}?/';

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

function checkIsGuidPhp(string $str): bool
{
    $originString = 'abcdefdhsf^dsdsвВВo*18340';
    return $str === $originString;
}

var_dump(checkIsGuidPcre('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPcre('e02fd0e4-00fd-090A-ca30-0d00a0038ba0'));
var_dump(checkIsGuidPcre('02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPcre('e02fd0e400fd090Aca300d00a0038ba0'));
/*
var_dump(checkIsGuidPhp('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPhp('e02fd0e4-00fd-090A-ca30-0d00a0038ba0'));
var_dump(checkIsGuidPhp('02fa0e4-01ad-090A-c130-0d05a0008ba0}'));
var_dump(checkIsGuidPhp('e02fd0e400fd090Aca300d00a0038ba0'));*/

