<?php

declare(strict_types=1);

/**
 * 1. Distinct
 * Compute number of distinct values in an array.
 */
function solution(array $A): int
{
    return count(array_unique($A));
}

$test = [
    2, 1, 1, 2, 3, 1
];
echo solution($test);
