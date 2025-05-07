<!-- Color Selector: Write a program to display the name of a color based on user input (red, green, blue). -->

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
                <td>Enter your color:-</td>
                <td><input type="text" name="color"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    $color = $_POST["color"];

    switch ($color) {
        case "red":
            $colorcode = "#ff0000";
            break;
        case "Green":
            $colorcode = "#008000";
            break;
        case "Blue":
            $colorcode = "#0000FF";
            break;
        case "Default":
            $colorcode = null;
    }

    if ($colorcode) 
    {?>
   
   
       <b style="background-color:<?php  echo $colorcode;?>">sfsd</b>

    
 <?php   }

?>

</body>
</html>