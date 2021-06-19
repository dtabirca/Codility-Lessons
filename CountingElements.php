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
function solution2()
{
}

/**
 * 3. MissingInteger
 * Find the smallest positive integer that does not occur in a given sequence.
 */
function solution3()
{
}

/**
 * 4. PermCheck
 * Check whether array A is a permutation.
 */
function solution4()
{
}
