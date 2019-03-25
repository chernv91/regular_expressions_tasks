<?php

function checkIsEqualStringPcre(string $str)
{
    $pattern = '/abcdefdhsf\^dsdsвВВo\*18340/u';

    $result = preg_match($pattern, $str);
    if ($result === 1) {
        $result = true;
    } elseif ($result === 0) {
        $result = false;
    } else {
        $result = 'Error';
    }

    return $result;
}

function checkIsEqualStringPhp(string $str): bool
{
    $originString = 'abcdefdhsf^dsdsвВВo*18340';
    return $str === $originString;
}

var_dump(checkIsEqualStringPcre('abcdefdhsf^dsdsвВВo*18340'));
var_dump(checkIsEqualStringPcre('abcdefghijklmnoasdfasdpqrstuv18340'));

var_dump(checkIsEqualStringPhp('abcdefdhsf^dsdsвВВo*18340'));
var_dump(checkIsEqualStringPhp('abcdefghijklmnoasdfasdpqrstuv18340'));

