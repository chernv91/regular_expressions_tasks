<?php

function checkIsValidColorPcre(string $str)
{
    $pattern = '/#[a-fA-F\d]{6}/';

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

function checkIsValidColorPhp(string $str): bool
{
    $result = false;

    if (strlen($str) === 7 && strpos($str, '#') === 0 && ctype_xdigit(substr($str, 1))) {
        $result = true;
    }

    return $result;
}


var_dump(checkIsValidColorPcre('#FFFFFF'));
var_dump(checkIsValidColorPcre('#FF3421'));
var_dump(checkIsValidColorPcre('#00ff00'));
var_dump(checkIsValidColorPcre('232323'));
var_dump(checkIsValidColorPcre('f#fddee'));
var_dump(checkIsValidColorPcre('#fd2'));
var_dump(checkIsValidColorPhp('#FFFFFF'));
var_dump(checkIsValidColorPhp('#FF3421'));
var_dump(checkIsValidColorPhp('#00ff00'));
var_dump(checkIsValidColorPhp('232323'));
var_dump(checkIsValidColorPhp('f#fddee'));
var_dump(checkIsValidColorPhp('#fd2'));


