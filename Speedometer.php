<?php

class Speedometer 
{

    public const KMTOMILES_CONVERSION = 0.621;
    public const MILESTOKM_CONVERSION = 1.609;

    public static function convertKmToMiles(int $km): float
    {   
        return $km * self::KMTOMILES_CONVERSION;
    }

    public static function convertMilesToKm(int $miles): float
    {   
        return $miles * self::MILESTOKM_CONVERSION;
    }


}

echo Speedometer::convertKmToMiles(10);
echo Speedometer::convertMilesToKm(10);
