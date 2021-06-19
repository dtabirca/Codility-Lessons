<?php

declare(strict_types=1);

/**
 * 1. CyclicRotation
 * Rotate an array to the right by a given number of steps.
 */
function solution1(array $A, int $K): array
{
    while ($K > 0 && !empty($A)) {
        array_unshift($A, array_pop($A));
        $K--;
    }
    return $A;
}

$testA = [
    3, 8, 9, 7, 6
];
$testK = 3;
print_r(solution1($testA, $testK));

/**
 * 2. OddOccurrencesInArray
 * Find value that occurs in odd number of elements.
 */
function solution2(array $A): int
{
    $odd = [];
    foreach ($A as $elm) {
        if (array_key_exists($elm, $odd)) {
            unset($odd[$elm]);
        } else {
            $odd[$elm] = 1;
        }
    }
    return key($odd);
}

$test = [
    9, 3, 9, 3, 9, 7, 9
];
echo solution2($test);