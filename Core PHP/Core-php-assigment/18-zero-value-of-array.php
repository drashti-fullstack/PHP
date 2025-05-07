<!-- Write a script to shift all zero values to the bottom of an array. -->

<?php
function shiftZerosToBottom(array $arr): array
{
    $nonZeros = [];
    $zeroCount = 0;

    // Separate non-zero values and count zeros
    foreach ($arr as $value) {
        if ($value === 0 || $value === 0.0) {
            $zeroCount++;
        } else {
            $nonZeros[] = $value;
        }
    }

    // Append zeros at the end
    for ($i = 0; $i < $zeroCount; $i++) {
        $nonZeros[] = 0;
    }

    return $nonZeros;
}

// Example usage
$arr = [1, 0, 2, 0, 4, 0, 3];
$result = shiftZerosToBottom($arr);

echo "Original: [" . implode(", ", $arr) . "]\n";
echo "Modified: [" . implode(", ", $result) . "]\n";
?>