<?php

declare(strict_types=1);

/**
 * Given an array A of N integers, return the smallest positive integer (greater than 0) that does not occur in A.
 */
function solution(array $A): int
{
    $a = array_flip($A);
    for ($i = 1; isset($a[$i]); $i++);
    return $i;
}

$test = [1, 3, 6, 4, 1, 2];
echo solution($test);
