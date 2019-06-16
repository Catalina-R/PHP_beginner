<?php
//good solution for clarity. array is an indicator
function add(array $numbers) {
    $total = 0;

    foreach ($numbers as $number) {

        $total += $number;
    }

    return $total;
}
$numbers = [5, 10, 23];

echo add($numbers);

echo '<br>';

//echivalent optimizat

function suma() {

    return array_sum(func_get_args());
}

echo suma(100, 1000, 265423);

// function happy($nume, $verb, $stare){

//     return "{$nume} {$verb} {$stare}";
// }

// echo happy('Robert', 'nu e', 'fericit!');