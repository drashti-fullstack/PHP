<!-- Restaurant Food Category Program: Use a switch case to display the category (Starter/Main Course/Dessert) and dish based on user selection. -->

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
                <td>Enter your choice category (Starter/Main Course/Dessert) :</td>
                <td><input type="text" placeholder="Starter/Main Course/Dessert" name="choice"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $CHOICE = $_POST["choice"];

        switch ($CHOICE) 
        {
            case "Starter":
    ?>
                <table>
                    
                    <tr>
                        <td>Paneer chilli Dry</td>
                        <td>220/-</td>
                    </tr>
                    <tr>
                        <td>Manchurian Dry</td>
                        <td>250/-</td>
                    </tr>
                    <tr>
                        <td>Noddels</td>
                        <td>230/-</td>
                    </tr>
                    
                </table>
            <?php
                break;
            case "Main Course":
            ?>
                <table>
                    <tr>
                        <td>Paneer tikka</td>
                        <td>280/-</td>
                    </tr>
                    <tr>
                        <td>kaju paneer butter masala</td>
                        <td>300/-</td>
                    </tr>
                    <tr>
                        <td>paneer pasanda</td>
                        <td>230/-</td>
                    </tr>
                    <tr>
                        <td>Khoya kaju</td>
                        <td>290/-</td>
                    </tr>
                </table>

            <?php
                break;
            case "Dessert":
            ?>
                <table>
                    <tr>
                        <td>venilaa ice cream</td>
                        <td>120/-</td>
                    </tr>
                    <tr>
                        <td>strowbarey ice cream</td>
                        <td>100/-</td>
                    </tr>
                    <tr>
                        <td>chocolate ice cream</td>
                        <td>90/-</td>
                    </tr>
                    <tr>
                        <td>Brauney</td>
                        <td>180/-</td>
                    </tr>
                </table>
    <?php
                break;
        }
    }


    ?>
</body>

</html>