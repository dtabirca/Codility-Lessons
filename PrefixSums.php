<?php

declare(strict_types=1);

/**
 * 1. CountDiv
 * Compute number of integers divisible by k in range [a..b]
 */
function solution1(int $A, int $B, int $K): int
{
	$divisible = 0;
	if ($A === $B) {
		if ($A % $K === 0) {
			$divisible = 1;
		}
	} else {
		$divisible = (int) abs(floor($B/$K) - floor(($A-1)/$K));
	}
	return $divisible;
}

/**
 * 2. GenomicRangeQuery
 * Find the minimal nucleotide from a range of sequence DNA.
 */
function solution2(str $S, array $P, array $Q): array
{
	$M = count($P);
	$minimalImpactFactor = [];
	for ($K = 0; $K < $M; $K++) {
	    $strChunk = substr($S, $P[$K], $Q[$K] - $P[$K] + 1);
	    if (strpos($strChunk, 'A') !== false) {
	        $minimalImpactFactor[] = 1;
	    } else if (strpos($strChunk, 'C') !== false) {
	        $minimalImpactFactor[] = 2;
	    } else if (strpos($strChunk, 'G') !== false) {
	        $minimalImpactFactor[] = 3;
	    } else {
	        $minimalImpactFactor[] = 4;
	    }
	}

	return $minimalImpactFactor;
}

/**
 * 3. MinAvgTwoSlice
 * Find the minimal average of any slice containing at least two elements.
 */
function solution3(array $A): int
{
	// $N = count($A);
	// asort($A);
}

/**
 * 4. PassingCars
 * Count the number of passing cars on the road. range [a..b]
 */
function solution4(array $A): array
{
	$count = 0;
	$east = array_keys($A, 0);
	$N = count($east);
	for ($i = 0; $i < $N; $i++) {
		$pairs = array_keys(array_slice($A, $east[$i]+1), 1);
		$count = $count + count($pairs);
		if ($count >= 1000000000) {
			return -1;
		}
	}
	return $count;
}