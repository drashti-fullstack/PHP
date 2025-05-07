<?php

$conn = mysqli_connect('localhost', 'root', '', 'notes');
if ($conn) {
    echo "database connected..!";
}


    $id = $_GET['id'];
    $sql = "select * from stud where id = '$id'";
    $run = mysqli_query($conn,$sql);
    $fetch = mysqli_fetch_array($run);

    $sql="delete from stud where id='$id'";
    $run=mysqli_query($conn,$sql);

    if ($run)
    {
        echo "record deleted..!";
        header("location:02-fetch.php");
    }


?>