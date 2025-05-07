<!-- Write a PHP program to determine if a number is even or odd using if conditions. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <table>
            <tr>
                <td> User Enter the number to cheak even/odd :</td>
                <td><input type="text" name="number" placeholder="Enter only interger number ...!"></td>
            </tr>
            <tr>
                <td><input type="submit" value="cheak"></td>
            </tr>
        </table>
    </form>
<?php

    $num = $_POST["number"];

    if ($num % 2 == 0) 
    {
        echo $num  . " is even number.";
    } else 
    {
        echo $num . " is odd number.";
    }

    ?>
</body>

</html>

