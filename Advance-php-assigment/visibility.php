<!-- Write a class that shows examples of each visibility type and how they restrict access to
properties and methods. -->

<?php

class visibility{
    public $publicproperty = "I am public";
    protected $protectedproperty = "I am protected";
    private $privateproperty = "I am private";


    public function publicmethod()
    {
        echo "This is a public method <br>";
    }
    protected function protectedmethod(){
        echo "This is a protected method <br>";
    }
    private function privatemethod(){
        echo "This is a privatemethod <br>";
    }
    public function showall(){
        echo $this->publicproperty . "<br>";
        echo $this->protectedproperty . "<br>";
        echo $this->privateproperty . "<br>";

        $this->publicmethod();
        $this->protectedmethod();
        $this->privatemethod();
    }
}

$obj=new visibility();
?>