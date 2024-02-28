<?php


// task 1
echo "Task 1" . PHP_EOL;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

// task 2
echo "Task 2" . PHP_EOL;
$numbers = array(1, 23, 44, 88, 13, 11, 7, 8);

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . PHP_EOL;
    }
}

