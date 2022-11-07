<?php

namespace App\Helpers;

class CommonGeneric
{
    public static function generateImageName($username, $ext)
    {
        return str_replace(" ", "_", strtolower($username)) . "." . $ext;
    }
}
