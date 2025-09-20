<!-- Write a PHP script to create a class representing a "Car" with properties like make, model,
and year, and a method to display the car details. -->
<?php


class Car
{

    public $make;
    public $model;
    public $year;


    public function __construct($make, $model, $year)
    {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }


    public function displayDetails()
    {
        echo "Car Details:<br>";
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

$myCar = new Car("Toyota", "Camry", 2022);


$myCar->displayDetails();

?>