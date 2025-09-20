<!-- Instantiate multiple objects of the "Car" class and demonstrate how to access their
properties and methods. -->
<?php

class  car
{
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displaydetails()
    {
        echo "car:$this->make $this->model ($this->year)<br>";
    }
}

$car1 = new car("toyota", "camery", 2020);
$car2 = new car("hond", "civic", 2021);
$car3 = new car("ford", "mustang", 2019);

$car1->displaydetails();
$car2->displaydetails();
$car3->displaydetails();


echo "model of car2 is: ".$car2->model."<br>";
?>