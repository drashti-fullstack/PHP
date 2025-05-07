<!-- String Reverse: Reverse a string without using built-in functions. -->

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<form method="post">
    Enter a string: <input type="text" name="inputString">
    <input type="submit" name="submit">
</form>

<?php

function reverseString($str) // take parameter 
{
    $reversed = "";//store the reverse version of string 
    $length = 0;// used to calculate the length of the string manually.

while (isset($str[$length])) // It checks if $str[$length] exists
    {
        $length++; // keep increasing untill the position does not exists
    }
    for ($i = $length - 1; $i >= 0; $i--) // goes from the last character to the first character
    {
        $reversed .= $str[$i]; // Appened each character to the reverse string 
    }

    return $reversed;
}


if (isset($_POST['submit'])) 
{
    $input = $_POST['inputString'];//string input from the form and stores it in $input.


    $output = reverseString($input);//stores the result in $output.


    echo $output; // print reverse string on the web page
}
?>

</body>
</html>