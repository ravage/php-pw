<?php

function fill(int $capacity = 10) : array
{
    $values = array();

    for ($i = 0; $i < $capacity; $i++) {
        $values[] = rand(1, 100);
    }

    return $values;
}

function sum(array $values) : int
{
    return array_sum($values);
}
