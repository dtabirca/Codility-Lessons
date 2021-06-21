<?php

declare(strict_types=1);

/**
 * 1. FrogRiverOne
 * Find the earliest time when a frog can jump to the other side of a river.
 */
function solution1(int $X, array $A): int
{
    $frogPosition = 0;
    $leaves = [];
    if (count($A) === 1) {
        if ($X === 1) return 0;
        else return -1;
    }
    foreach ($A as $seconds => $leafPosition) {
        $leaves[$leafPosition] = 1;
        if (count($leaves) === $X) {
            return $seconds;
        }
    }
    return -1;
}

/**
 * 2. MaxCounters
 * Calculate the values of counters after applying all alternating operations: increase counter by 1; set value of all counters to current maximum.
 */
function solution2(int $N, array $A): array
{
    $counters = array_fill(0, $N, 0);
    $max = 0;
    $M = count($A);
    for ($i = 0; $i < $M; $i++) {
        if ($A[$i] === $N + 1) {
            $counters = array_fill(0, $N, $max);
            continue;
        }
        $counters[$A[$i] - 1]++;
        if ($counters[$A[$i] - 1] > $max) {
        	$max = $counters[$A[$i] - 1];
        }
    }
    return $counters;
}

/**
 * 3. MissingInteger
 * Find the smallest positive integer that does not occur in a given sequence.
 */
function solution3()
{
    $a = array_flip($A);
    for ($i = 1; isset($a[$i]); $i++);
    return $i;
}

/**
 * 4. PermCheck
 * Check whether array A is a permutation.
 */
function solution4()
{
	$N = count($A);
    $A = array_flip($A);
    for ($i = 1; $i <= $N; $i++) {
        if (!isset($A[$i])) {
            return 0;
        }
    }
    return 1;
}
