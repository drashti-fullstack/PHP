<!-- Create a class with static properties and methods, and demonstrate their access using the
scope resolution operator. -->

<?php
class math{
    public static $pi = 3.1415;

    public static function areaofcircle($radius)
    {
        return self::$pi * $radius * $radius;
    }
    public static function circumference($radius)
    {
        return 2 * self::$pi * $radius;
    }
}
// echo "radius: ".$radius . "\n";

echo "value of PI: ".math::$pi."\n";

// echo "circumference of circle: ".math::circumference($radius)."\n";


?>