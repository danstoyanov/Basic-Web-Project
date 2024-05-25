<?php

class Validator
{
    public static function textValidation($text, $min = 0, $max = INF)
    {
        $result = trim($text);

        return strlen($result) > $min && strlen($result)  <= $max;
    }

    public static function emailValidation($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}