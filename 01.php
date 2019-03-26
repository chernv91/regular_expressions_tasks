<?php

function checkIsEqualStringPcre(string $str): bool
{
    $pattern = '/^abcdefdhsf\^dsdsвВВo\*18340$/u';
    return preg_match($pattern, $str) ? true : false;
}

function checkIsEqualStringPhp(string $str): bool
{
    $originStr = 'abcdefdhsf^dsdsвВВo*18340';
    return $str === $originStr;
}

var_dump(checkIsEqualStringPcre('abcdefdhsf^dsdsвВВo*18340'));
var_dump(checkIsEqualStringPcre('abcdefghijklmnoasdfasdpqrstuv18340'));

var_dump(checkIsEqualStringPhp('abcdefdhsf^dsdsвВВo*18340'));
var_dump(checkIsEqualStringPhp('abcdefghijklmnoasdfasdpqrstuv18340'));

