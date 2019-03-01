<?php

function fill(int $size = 10) : array
{
    $values = array();
    for ($i = 0; $i < $size; $i++) {
        $values[] = rand(1, 100);
    }

    return $values;
}

$values = fill();
array_walk($values, function ($element) {
    echo "$element\n";
});
