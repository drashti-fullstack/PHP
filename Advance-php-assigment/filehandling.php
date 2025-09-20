<!-- Create a script that reads from a text file and displays its content on a web page-->

<?php
$filename="file.txt";

if(file_exists($filename)){
    $content = file_get_contents($filename);

    echo "<h3>File content:</h3>";
    echo nl2br($content);
}
else{
    echo "Error:file not found!";
}
?>