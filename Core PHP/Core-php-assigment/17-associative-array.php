<!-- 3. Create an associative array for user details (name, email, age) and display them. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arr = array
            (
                array("Name" => "Drashti", "Email" => "drashtikukadiya12@gmail.com", "Age" =>21),
                array("Name" => "Kirtan", "Email" => "kirtankukadiya111@gmail.com", "Age" =>20),
                array("Name" => "Devansh", "Email" => "devanshkukadiya252@gmail.com", "Age" =>17),
                array("Name" => "vishva", "Email" => "vishvasoni251@gamil.com", "Age" =>25)
            );

            foreach ($arr as $user) 
            {
                echo "<tr>";
                echo "<td>" . $user["Name"] . "</td>";
                echo "<td>" . $user["Email"] . "</td>";
                echo "<td>" . $user["Age"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>