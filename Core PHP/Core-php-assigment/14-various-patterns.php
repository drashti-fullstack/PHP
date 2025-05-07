<!-- Various Patterns: Generate different patterns using loops. -->
<?php

// Pattern number 1
// for ($i = 1; $i <= 5; $i++)
//  {
//     for ($j = 1; $j <= $i; $j++) 
//     {
//         echo "A";
//     }
//     echo "<br>";
// }


//Pattern number 2 

// // for ($i = 5; $i >= 1; $i--) 
//     {
// //     for ($j = 1; $j <= $i; $j++) 
//         {
// //         echo "A";
// //      }
// //         echo "<br>";
// // }


// Pattern number 3

for ($i = 1; $i <= 5; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo $j;
    }
    echo "<br>";
}

?>