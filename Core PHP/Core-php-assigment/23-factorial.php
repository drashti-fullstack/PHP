<!-- 2. Factorial: Write a function that finds the factorial of a number using recursion. -->


<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<form method="post">
    Enter a number: <input type="text" name="number">
    <input type="submit" name="submit">
</form>

<?php

function factorial($n) 
{

    if ($n <= 1) // if $n is 0 or 1 then it's return 1
    {
        return 1;
    } else 
    {
        return $n * factorial($n - 1); //multiplying until it reaches 1.
    }
}
if (isset($_POST['submit'])) // check if form was submitted
{
    $number = intval($_POST['number']); // get number from user and convert to integer

    if ($number < 0) // factorial is not define for negative number
    {
        echo "Factorial is not defined for negative numbers";
    } 
    else 
    {
        $result = factorial($number); // call factorial function
        echo "Factorial of $number is $result"; // print result
    }
}
?>
</body>
</html>