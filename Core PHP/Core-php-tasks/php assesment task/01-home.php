<?php

$conn=mysqli_connect('localhost','root','','notes');
if($conn){
    echo "database connected..!";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
</head>
<style>
    .container
    {
        display: flex;
    }
</style>
<body>
    <div class="container display-flex">
    <div class="col">
    <a href="/05-edit.php" class="btn btn-sm btn-primary">Edit</a>
    <a href="/03-delete.php" class="btn btn-sm btn-primary">Delete</a>
    <a href="/04-view.php" class="btn btn-sm btn-primary">View</a>
    </div>
    <div class="col">
        <form method="post"  enctype="multipart/form-data">
        >
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name='xyz' value=male>Male 
                        <input type="radio" name='xyz' value=female>Female
                    </td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" multiple name="file"></td>
                </tr>
                <tr>
                    <td>Hobbies:</td>
                    <td><input type="text" name="hobby"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submitbtn"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php

    if(isset($_POST['submitbtn']))
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $image=$_POST['file'];
        $hobbies=$_POST['hobby'];
         
        $sql="insert into stud (name,mobile,email,gender,image,hobbies)
        values('$name','$mobile','$email','$gender','$image','$hobbies')";
        $run=mysqli_query($conn,$sql);

        if($run)
        {
            echo "record inserted..!";
            header("location:02-fetch.php");
        }

    }
    ?>
</body>
</html>