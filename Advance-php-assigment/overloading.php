<!-- Create a class that demonstrates method overloading by defining multiple methods with the
same name but different parameters. -->
<?php
class cal
{
    function add()
    {
        $get=func_get_args();
        $count=func_num_args();

        if($count==2){
            echo "Sum 2 number : ". ($get[0] + $get[1]). "<br>";
        }
        else{
            echo "please provide 2 number.<br>";
        }

    }
}

$obj= new cal();
$obj->add(5,10);
$obj->add(3);

?>