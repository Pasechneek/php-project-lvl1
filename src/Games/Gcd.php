<?php

namespace Brain\Games\Src\Games\Gcd;

use function Brain\Games\Src\Engine\engine;
use function cli\line;
use function Brain\Games\Cli\cli;

function gcdRealization($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a =  $a - $b;
        } else {
            $b = $b - $a;
        }
    }
    return $b;
}

function gcd(): void
{
    line('Find the greatest common divisor of given numbers.');
    $name = cli();
    $attempts = 3;

    for ($counter = 0; $counter < $attempts; $counter++) {
        $first = rand(2, 99);
        $second = rand(2, 99);
        $question = "{$first} {$second}";
        $correctAncver = gcdRealization($first, $second);
        $correctAncver = (string) $correctAncver;
        //echo "the correct ancver is ";
        //var_dump($correctAncver);
        $engine = engine($question, $correctAncver, $name);
        if ($engine) {
            $result = "Congratulations, {$name}!";
        } else {
            $result = "Let's try again, {$name}.";
            break;
        }
    }
    line($result);
}
