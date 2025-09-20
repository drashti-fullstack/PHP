<!-- Create a class marked as final and attempt to extend it to show the restriction. -->
 <?php
final class finalexa{
    public function display(){
        echo "This is final class. it cannot be inherited.<br>";
    }
}

$obj=new finalexa();
$obj->display();

class child extends finalexa{
    public function show()
    {
        echo "Trying to extend a final class.<br>";
    }
}

?>