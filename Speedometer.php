<<?php


    class Speedometer
    {

        const MILES = 1.61;

        public static function convertKmToMiles(int $speed)
        {
            return round($speed / self::MILES, 2);
        }
    }
