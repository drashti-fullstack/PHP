<!-- Simple Calculator: Create a calculator using if-else conditions that takes two inputs
and an operator (+, -, *, /). -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        user entered first number:<input type="text"name="firstnumber">
        user entered second number:<input type="text"name="secondnumber">
        enter user choice:<input type="text"name="choice">
        <input type="submit">
    </form>

    <?php

    $number1 = $_POST["firstnumber"];
    $number2 = $_POST["secondnumber"];
    $calculator = $_POST["choice"];
    $res = " ";


    if ($calculator == "+") 
    {
        $res = "addition = " . $number1 + $number2;
        echo $res;
    } elseif ($calculator == "-") 
    {
        $res = "subtraction = " . $number1 - $number2;
        echo $res;
    } elseif ($calculator == "%") 
    {
        $res = "modulo = " . $number1 % $number2;
        echo $res;
    } elseif ($calculator == "/") 
    {
        $res = "division = " . $number1 / $number2;
        echo $res;
    } elseif ($calculator == "*") 
    {
        $res = "multiplication" . $number1 * $number2;
        echo $res;
    } else 
    {
        echo $res . "<br>";
    }
?>
</body>
</html>