<?php

namespace Brain\Games\Src\Games\Prime;

use function Brain\Games\Src\Engine\engine;
use function cli\line;
use function Brain\Games\Cli\cli;
use function gmp_prob_prime;

function prime(): void
{
    $name = cli();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $attempts = 3;
    $correctAncver = '';

    for ($counter = 0; $counter < $attempts; $counter++) {  // цикл игр открывается
        $someNumber = rand(1, 100);
        $question = "{$someNumber}";
        $check = gmp_prob_prime($someNumber, 10);
        if ($check === 0) {// NOT Simple
            $correctAncver = 'no';
        } elseif ($check === 2) {// Simple 100%
            $correctAncver = 'yes';
        } else {//strange situation
       // echo "strange situation with someNumber = {$someNumber} and check = {$check}\n";
             $correctAncver = 'no';
        }
        $correctAncver = (string) $correctAncver;
        //echo "the correct ancver is ";
        //var_dump($correctAncver);
        //var_dump($engine);
        do {
            $engine = engine($question, $correctAncver, $name);
        } while ($engine !== true);
    }
    if ($engine) {
        $result = "Congratulations, {$name}!";
    } else {
        $result = "Let's try again, {$name}.";
    }
    line($result);
}
