<?php

$conn = mysqli_connect('localhost', 'root', '', 'notes');
if ($conn) {
    echo "database connected..!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $sql = "select * from stud where id='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch = mysqli_fetch_array($run);
    ?>
    <h4><?php echo $fetch ['id']?></h4>
    <h4><?php echo $fetch ['name']?></h4>
    <h4><?php echo $fetch ['mobile']?></h4>
    <h4><?php echo $fetch ['email']?></h4>
    <h4><?php echo $fetch ['gender']?></h4>
    <h4><?php echo $fetch ['image']?></h4>
    <h4><?php echo $fetch ['hobbies']?></h4>

</body>

</html>