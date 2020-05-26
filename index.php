<?php

echo 'Test';

$numbers = generateNumbers();
var_dump($numbers);

/**
 * Generates random numbers; each between 0 - 9
 * @return string
 */
function generateNumbers()
{
    $numbers = '';

    for ($i = 0; $i < 4; $i++) {
        $numbers .= rand(0, 9) . ' ';
    }

    return $numbers;
}