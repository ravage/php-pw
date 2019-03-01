<?php

function countValues(array $values = array()) : array
{
    $result = array_combine(
        array_values($values),
        array_fill(0, count($values), 0)
    );

    foreach ($values as $value) {
        $result[$value]++;
    }

    return $result;
}
