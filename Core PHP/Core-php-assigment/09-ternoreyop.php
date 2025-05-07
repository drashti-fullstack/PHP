<!-- Ternary Operator Example: Write a script using the ternary operator to display a message if the age is greater than 18. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Enter your age :-
                <input type="text" name="age">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $number = $_POST["age"];
    $res = ($number > 18) ? "You are eligible for voting" : "you are not eligible for voting";
    echo $res;
    ?>

</body>

For more comprehensive 


</html>