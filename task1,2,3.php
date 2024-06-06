<?php
echo "<h2>Multiplication Table from 1 to 10</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "<h3>Table of $i</h3>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}
 
?>
<?php
$number = 10
; // Yahan par apna number daalein

// Check if the number is odd or even
if ($number % 2 == 0) {
    echo "$number is an even number.";
} else {
    echo "$number is an odd number.";
}
?>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}
?>