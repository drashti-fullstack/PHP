<!-- Write a method in a class that accepts type-hinted parameters and demonstrate how it
works with different data types. -->

<?php
class typehint
{
    public function showtype(
        int $num,
        string $text,
        array $arr,
        bool $flag,
        float $decimal
    )
    {
        echo "Integer: $num <br>";
        echo "string: $text <br>";
        echo "array: " .implode(" ,",$arr).  "<br>";
        echo "Boolean: ". ($flag ? "true" : "false"). "<br>";
        echo "float: $decimal <br>";

    }
}

$obj = new typehint();

echo "<h3>correct type passed:</h3>";
$obj->showtype(25,"Hello php",["apple","banana"],true,10.7);

echo "<h3>Incorrect types passed:</h3>";
try{
    $obj->showtype("25",123,"notarray","yes","12.5");
}catch(typeerror $e)
{
    echo "error: ".$e->getmessage();
}
?>