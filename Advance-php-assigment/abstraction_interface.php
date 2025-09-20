<!-- Define an interface named VehicleInterface with methods like start(), stop(), and
implement this interface in multiple classes. -->

<?php

interface vehicle{
    public function start();
    public function stop();
}
class car implements vehicle{
    public function start(){
        echo "car started.<br>";
    }
    public function stop(){
        echo "car stopped.<br>";
    }
}
class  bike implements vehicle{
    public function start(){
        echo "bike started...!<br>";
    } 
    public function stop()
    {
        echo "bike stopped....!";
    }
}

$obj=new car();
$obj->start();
$obj->stop();

$obj=new bike();

    $obj->start();
    $obj->stop();


?>