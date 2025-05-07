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
    $sql = "select * from stud where id = '$id'";
    $run = mysqli_query($conn,$sql);
    $fetch = mysqli_fetch_array($run);
    

    if(isset($_POST['editbtn']))
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $image=$_POST['file'];
        $hobbies=$_POST['hobby'];
         
        $sql="update stud set name='$name',mobile='$mobile',email='$email',gender='$gender',file='$image',hobby='$hobbies'";
        $run=mysqli_query($conn,$sql);

        if($run)
        {
            echo "record updated..!";
            header("location:02-fetch.php");
        }

    }



    ?>
     <form method="post">
            <table>
            <tr>
                    <td>Id:</td>
                    <td><input type="text" name="id" value="<?php echo $fetch ['id']?>"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $fetch ['name']?>"></td>
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><input type="text" name="mobile" value="<?php echo $fetch ['mobile']?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $fetch ['email']?>"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name='xyz' value="<?php echo $fetch ['gender']?>">Male 
                        <input type="radio" name='xyz' value="<?php echo $fetch ['gender']?>">Female
                    </td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" multiple name="file" value="<?php echo $fetch ['image']?>"></td>
                </tr>
                <tr>
                    <td>Hobbies:</td>
                    <td><input type="text" name="hobby" value="<?php echo $fetch ['hobbies']?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="editbtn"></td>
                </tr>
            </table>
        </form>
    </body>
</html>