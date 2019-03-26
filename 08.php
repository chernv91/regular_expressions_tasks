<?php

function checkIsValidIpPcre(string $str): bool
{
    $pattern = '/(\d){1,3}\.(\d){1,3}\.(\d){1,3}\.(\d){1,3}/';

    $result = preg_match($pattern, $str, $matches);

    if ($result === 1 && $matches[0] === $str) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function checkIsValidIpPhp(string $str): bool
{
    $result = false;

    $ip = filter_var($str, FILTER_VALIDATE_IP);

    if ($ip) {
        $result = true;
    }

    return $result;
}

var_dump(checkIsValidIpPcre('127.0.0.1'));
var_dump(checkIsValidIpPcre('255.255.255.0'));
var_dump(checkIsValidIpPcre('192.168.0.1'));
var_dump(checkIsValidIpPcre('1300.6.7.8'));
var_dump(checkIsValidIpPcre('abc.def.gha.bcd'));
var_dump(checkIsValidIpPcre('254.hzf.bar.10'));

var_dump(checkIsValidIpPhp('127.0.0.1'));
var_dump(checkIsValidIpPhp('255.255.255.0'));
var_dump(checkIsValidIpPhp('192.168.0.1'));
var_dump(checkIsValidIpPhp('1300.6.7.8'));
var_dump(checkIsValidIpPhp('abc.def.gha.bcd'));
var_dump(checkIsValidIpPhp('254.hzf.bar.10'));


