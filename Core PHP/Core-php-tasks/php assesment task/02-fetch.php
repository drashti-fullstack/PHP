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
    <table border="1" align=center>
        <thead>
            <tr>
                <th colspan="7">Student detail</th>
            </tr>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mobile</th>
                <th>email</th>
                <th>gender</th>
                <th>image</th>
                <th>hobbies</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from stud";
            $run = mysqli_query($conn, $sql);
            while ($fetch = mysqli_fetch_array($run)) {

            ?>
                <tr>
                    <td><?php echo $fetch['id'] ?></td>
                    <td><?php echo $fetch['name'] ?></td>
                    <td><?php echo $fetch['mobile'] ?></td>
                    <td><?php echo $fetch['email'] ?></td>
                    <td><?php echo $fetch['gender'] ?></td>
                    <td><?php echo $fetch['image'] ?></td>
                    <td><?php echo $fetch['hobbies'] ?></td>

                    <td><button><a href="04-view.php?id=<?php echo $fetch['id'] ?>">view</a></button></td>
                    <td><button><a href="03-delete.php?id=<?php echo $fetch['id'] ?>">delete</a></button></td>
                    <td><button><a href="05-edit.php?id=<?php echo $fetch['id'] ?>">edit</a></button></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>