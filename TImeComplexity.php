<?php

declare(strict_types=1);

/**
 * 1. FrogJmp
 * Count minimal number of jumps from position X to Y.
 */
function solution(int $X, int $Y, int $D): int
{
    $totalDistance = $Y - $X;
    $numberOfJumps = (int) ceil($totalDistance / $D);
    return $numberOfJumps;
}

echo solution(10, 85, 30);
