<?php

function checkIsValidUrlPcre(string $str): bool
{
    $pattern = '/^(https?:\/\/)?([a-z\d]){2,}\.([a-z\d\-]{2,}[^\-]\.)?([a-z]){2,}([a-z\/:%_\.?#=&\d]{2,})?$/';
    return preg_match($pattern, $str) ? true : false;
}

function checkIsValidUrlPhp(string $str): bool
{
    $result = true;

    if (strpos($str, 'http://') === false) {
        $str = "http://$str";
    }

    $host = parse_url($str, PHP_URL_HOST);
    $arr = explode('.', $host);

    foreach ($arr as $item) {

        if (strlen($item) < 2) {
            $result = false;
            break;
        }

    }

    if ($result !== false) {
        $url = filter_var($str, FILTER_VALIDATE_URL);

        if (!$url) {
            $result = false;
        }

    }

    return $result;
}

var_dump(checkIsValidUrlPcre('http://www.zcontest.ru'));
var_dump(checkIsValidUrlPcre('http://zcontest.ru'));
var_dump(checkIsValidUrlPcre('http://zcontest.com'));
var_dump(checkIsValidUrlPcre('https://zcontest.ru'));
var_dump(checkIsValidUrlPcre('https://sub.zcontest-ru.com:8080'));
var_dump(checkIsValidUrlPcre('http://zcontest.ru/dir%201/dir_2/program.ext?var1=x&var2=my%20value'));
var_dump(checkIsValidUrlPcre('zcon.com/index.html#bookmark'));
var_dump(checkIsValidUrlPcre('Just Text.'));
var_dump(checkIsValidUrlPcre('http://a.com'));
var_dump(checkIsValidUrlPcre('http://www.domain-.com'));

var_dump(checkIsValidUrlPhp('http://www.zcontest.ru'));
var_dump(checkIsValidUrlPhp('http://zcontest.ru'));
var_dump(checkIsValidUrlPhp('http://zcontest.com'));
var_dump(checkIsValidUrlPhp('https://zcontest.ru'));
var_dump(checkIsValidUrlPhp('https://sub.zcontest-ru.com:8080'));
var_dump(checkIsValidUrlPhp('http://zcontest.ru/dir%201/dir_2/program.ext?var1=x&var2=my%20value'));
var_dump(checkIsValidUrlPhp('zcon.com/index.html#bookmark'));
var_dump(checkIsValidUrlPhp('Just Text.'));
var_dump(checkIsValidUrlPhp('http://a.com'));
var_dump(checkIsValidUrlPhp('http://www.domain-.com'));

