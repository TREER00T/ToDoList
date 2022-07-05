<?php

namespace App\Util\crypt;

class hash
{
    public static function getRandomHashForImageName(): string
    {
        return md5(date('YMDHIS') . rand(100000000000000000, 999999999999999999)) . '.jpg';
    }
}
