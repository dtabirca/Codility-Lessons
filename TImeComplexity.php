<?php

declare(strict_types=1);

/**
 * 1. FrogJmp
 * Count minimal number of jumps from position X to Y.
 */
function solution1(int $X, int $Y, int $D): int
{
    $totalDistance = $Y - $X;
    $numberOfJumps = (int) ceil($totalDistance / $D);
    return $numberOfJumps;
}

echo solution1(10, 85, 30);

/**
 * 2. PermMissingElem
 * Find the missing element in a given permutation.
 */
function solution2(array $A): int
{
    $A = array_flip($A);
    $n = 1;
    while (array_key_exists($n, $A)) {
        $n++;
    }
    return $n;
}

echo solution2([2, 3, 1, 5]);

/**
 * 3. TapeEquilibrium
 * Minimize the value |(A[0] + ... + A[P-1]) - (A[P] + ... + A[N-1])|.
 */
function solution3(array $A): int
{
    $sum1 = $A[0];
    $sum2 = array_sum(array_slice($A, 1, count($A) - 1));
    $diff = abs($sum1 - $sum2);
    for ($P = 1; $P < count($A) - 1; $P++) {
        $sum1 = $sum1 + $A[$P];
        $sum2 = $sum2 - $A[$P];
        if (abs($sum1 - $sum2) < $diff) {
            $diff = abs($sum1 - $sum2);
        }
    }
    return $diff;
}

echo solution3([3, 1, 2, 4, 3]);
