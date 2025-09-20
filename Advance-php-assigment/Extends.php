<!-- Create a "Vehicle" class and extend it with a "Car" class. Include properties and methods in
both classes, demonstrating inherited behavior. -->


<?php
class Vehicle
{
    public $brand;
    public $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function strat()
    {
        echo "The vehicle is starting.<br>";
    }
    public function stop()
    {
        echo "The vehicle is stopped.<br>";
    }
    public function display()
    {
        echo "brand: $this->brand, color:$this->color<br>";
    }
}

class car extends Vehicle
{
    public $model;
    public $year;

    public function __construct($brand, $color, $model, $year)
    {
        parent::__construct($brand, $color);
        $this->model = $model;
        $this->year = $year;
    }

    public function honk(){
        echo "This is honk$this->brand $this->model.<br>";
    }

    public function displaycardetails()
    {
        $this->display();
        echo "model: $this->model,year:$this->year<br>";
    }
}

$car1=new car("toyota","red","camry",2021);

$car1->strat();
$car1->honk();
$car1->displaycardetails();
$car1->stop();
?>