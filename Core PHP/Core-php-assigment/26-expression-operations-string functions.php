<!-- Write a script to perform various string operations like concatenation, substring
extraction, and string length determination. -->
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>


<form method="post">
    String 1: <input type="text" name="string1"><br>
    String 2: <input type="text" name="string2"><br>
    Substring Start Position: <input type="number" name="start"><br>
    Substring Length: <input type="number" name="length"><br>
    <input type="submit" name="submit" >
</form>

<?php
if (isset($_POST['submit'])) 
{
    $str1 = $_POST['string1'];
    $str2 = $_POST['string2'];
    $start = intval($_POST['start']);
    $length = intval($_POST['length']);

    // string concatenation
    $concatenated = $str1 . $str2;

    // Substring Extraction 
    $substring = "";
    for ($i = $start; $i < $start + $length && isset($str1[$i]); $i++) 
    {
        $substring .= $str1[$i];
    }

    // String Length 
    $count = 0;
    while (isset($str1[$count])) 
    {
        $count++;
    }

    
    echo "Results";
    echo $concatenated . "<br>";
    echo $substring . "<br>";
    echo $count . "<br>";
}
?>

</body>
</html>
