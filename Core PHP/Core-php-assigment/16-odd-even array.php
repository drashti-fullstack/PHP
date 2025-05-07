<!-- 2. Find and display the number of odd and even elements in an array -->

<?php

$arr = array(10,11,12,13,14,15);

for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i] % 2 == 0)
    {
        echo "This is even number :- "  . $arr[$i] . "<br>";
    }
    else
    {
        echo "This is odd number :- " . $arr[$i] . "<br>";
    }
}

?>
