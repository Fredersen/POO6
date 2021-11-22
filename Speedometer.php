<?php

class Speedometer 
{

    public const KMTOMILES_CONVERSION = 0.621;

    public static function convertKmToMiles(int $km): float
    {   
        return $km * self::KMTOMILES_CONVERSION;
    }

}

echo Speedometer::convertKmToMiles(10);