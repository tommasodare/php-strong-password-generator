<?php

function randompassword($long)
{

    $password = "";
    $possibleChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_?*+&%!#@><°-:,/';

    for ($i = 0; $i < $long; $i++) {

        $randomsign = rand(0, strlen($possibleChars) - 1); // strlen è usato per ottenere la long della stringa
        $password .= $possibleChars[$randomsign];
    }

    return $password;
}
