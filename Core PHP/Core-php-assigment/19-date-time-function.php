<!-- Write a script to display the current date and time in different formats. -->

<?php
date_default_timezone_set("asia/kolkata"); // Set your timezone

echo "Default format: " . date("Y-m-d H:i:s") . "<br>";
echo "Day-Month-Year: " . date("d-m-Y") . "<br>";
echo "Month/Day/Year: " . date("m/d/Y") . "<br>";
echo "Full Date: " . date("l, F j, Y") . "<br>";
echo "Time (12-hour format): " . date("h:i:s A") . "<br>";
echo "Time (24-hour format): " . date("H:i:s") . "<br>";
echo "Year: " . date("Y") . "<br>";
echo "Month name: " . date("F") . "<br>";
echo "Day name: " . date("l") . "<br>";
?>

