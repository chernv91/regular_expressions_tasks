<?php

function checkIsValidColorPcre(string $str): bool
{
    $pattern = '/^#[a-fA-F\d]{6}$/';
    return preg_match($pattern, $str) ? true : false;
}

var_dump(checkIsValidColorPcre('#FFFFFF'));
var_dump(checkIsValidColorPcre('#FF3421'));
var_dump(checkIsValidColorPcre('#00ff00'));
var_dump(checkIsValidColorPcre('232323'));
var_dump(checkIsValidColorPcre('f#fddee'));
var_dump(checkIsValidColorPcre('#fd2'));


