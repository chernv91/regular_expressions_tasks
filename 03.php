<?php

function checkIsRightMac(string $str): bool
{
    $pattern = '/^([a-fA-F\d]){2}:([a-fA-F\d]){2}:([a-fA-F\d]){2}:([a-fA-F\d]){2}:([a-fA-F\d]){2}:([a-fA-F\d]){2}$/';
    return preg_match($pattern, $str) ? true : false;
}

var_dump(checkIsRightMac('01:32:54:67:89:AB'));
var_dump(checkIsRightMac('aE:dC:cA:56:76:54'));
var_dump(checkIsRightMac('01:33:47:65:89:ab:cd'));
var_dump(checkIsRightMac('01:23:45:67:89:Az'));
