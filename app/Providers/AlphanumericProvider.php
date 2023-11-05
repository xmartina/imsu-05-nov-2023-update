<?php
// app/Providers/AlphanumericProvider.php

namespace App\Providers;

class AlphanumericProvider
{
    public static function generateAlphanumeric($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $characterLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $characterLength - 1)];
        }

        return $randomString;
    }
}

