<!-- Day Finder: Write a script that finds the current day. If it is Sunday, print "Happy Sunday." -->

<?php

$currentday = date("l");

if ($currentday === "Sunday") {
    echo "Happy sunday" . "<br>";
} else {
    echo $currentday . "<br>";
}
