<!-- Create a form that takes a user's name and email. Use the $_POST super global to
display the entered data. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        
     Enter your Name:  <input type="text" name="name"><br>
     Enter your Email: <input type="email" name="email"><br>
     <input type="submit">

    </form>
<?php

$name = $_POST['name'];
$email=$_POST['email'];

echo $name. "<br>";
echo $email. "<br>";

?>

</body>
</html>