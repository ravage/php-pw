<?php

function hammingDistance(string $a, string$b) : int
{
    $distance = 0;
    $aLength = strlen($a);
    $bLength = strlen($b);

    if ($aLength != $bLength) {
        throw new InvalidArgumentException('String must be of equal length.');
    }

    for ($i = 0; $i < $aLength; $i++) {
        if ($a[$i] != $b[$i]) {
            $distance++;
        }
    }

    return $distance;
}
