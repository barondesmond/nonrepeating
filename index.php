<?php

function nonRepeatingString(string $string): string|int
{
    $i = 0;
    $nonRepeatingString = [];

    while (isset($string[$i]) && strlen($string[$i]) > 0) {
        if (!isset($nonRepeatingString[$string[$i]])) {
            $nonRepeatingString[$string[$i]] = 0;
        }
        $nonRepeatingString[$string[$i]] = $nonRepeatingString[$string[$i]] + 1;
        $i++;
    }

    foreach ($nonRepeatingString as $char => $int) {
        if ($int === 1) {
            return $char;
        }
    }

    return -1;

}

echo nonRepeatingString("as the world a chruns");