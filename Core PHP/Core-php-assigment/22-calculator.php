<!-- Calculator: Create a calculator using user-defined functions. -->
<?php

function add($a, $b)
{
    return $a + $b;
}


function subtract($a, $b) 
{
    return $a - $b;
}


function multiply($a, $b) 
{
    return $a * $b;
}

function divide($a, $b) 
{
    if ($b != 0) 
    {
        return $a / $b;
    } else 
    {
        return "Cannot divide by zero!";
    }
}


$num1 = 20;
$num2 = 5;
$operator = '+'; 


switch ($operator) 
{
    case '+':
        echo "Result: " . add($num1, $num2);
        break;
    case '-':
        echo "Result: " . subtract($num1, $num2);
        break;
    case '*':
        echo "Result: " . multiply($num1, $num2);
        break;
    case '/':
        echo "Result: " . divide($num1, $num2);
        break;
    default:
        echo "Invalid input!";
}
?>

