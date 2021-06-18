<?php

declare(strict_types=1);

/**
 * 1. Binary Gap
 * Find longest sequence of zeros in binary representation of an integer.
 */
function solution(int $N): int
{
    // write your code in PHP7.0
    $bin = decbin($N);
    preg_match_all("/(?=(1(0+)1))/", (string)$bin, $matches);
    $res = 0;
    foreach ($matches[2] as $a) {
        $count = strlen((string)$a);
        if ($count > $res) {
            $res = $count;
        }
    }
    return $res;
}

$test = 529;
echo solution($test);
