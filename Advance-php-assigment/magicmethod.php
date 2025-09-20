<!-- Create a class that uses magic methods to handle property and modification dynamically. -->

<?php
class dynamic
{
    private $data = [];

    public function __set($name, $value)
    {
        echo "setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        echo "getting '$name'\n";
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
}

$obj = new dynamic();

$obj->name = 'drashti'; // call __set
echo $obj->name . "\n"; //call __get

if (isset($obj->name)) {
    echo "Property 'name' is set.\n";
}
unset($obj->name);
if(!isset($obj->name)){
    echo "property 'name' is now unset.\n";
}

?>