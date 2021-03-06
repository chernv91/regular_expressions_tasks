<?php

function checkIsValidEmailPcre(string $str)
{
    $pattern = '/^[a-z\d!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z\d!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\.)+[a-z\d](?:[a-z\d-]*[a-z\d])?$/';
    return preg_match($pattern, $str) ? true : false;
}

function checkIsValidEmailPhp(string $str): bool
{
    $result = false;

    $email = filter_var($str, FILTER_VALIDATE_EMAIL);

    if ($email) {
        $result = true;
    }

    return $result;
}

var_dump(checkIsValidEmailPcre('mail@mail.ru'));
var_dump(checkIsValidEmailPcre('valid@megapochta.com'));
var_dump(checkIsValidEmailPcre('aa@aa.info'));
var_dump(checkIsValidEmailPcre('bug@@@com.ru'));
var_dump(checkIsValidEmailPcre('@val.ru'));
var_dump(checkIsValidEmailPcre('Just Text2'));
var_dump(checkIsValidEmailPcre('val@val'));
var_dump(checkIsValidEmailPcre('val@val.a.a.a.a'));
var_dump(checkIsValidEmailPcre('12323123@111[]][]'));

var_dump(checkIsValidEmailPhp('mail@mail.ru'));
var_dump(checkIsValidEmailPhp('valid@megapochta.com'));
var_dump(checkIsValidEmailPhp('aa@aa.info'));
var_dump(checkIsValidEmailPhp('bug@@@com.ru'));
var_dump(checkIsValidEmailPhp('@val.ru'));
var_dump(checkIsValidEmailPhp('Just Text2'));
var_dump(checkIsValidEmailPhp('val@val'));
var_dump(checkIsValidEmailPhp('val@val.a.a.a.a'));
var_dump(checkIsValidEmailPhp('12323123@111[]][]'));


