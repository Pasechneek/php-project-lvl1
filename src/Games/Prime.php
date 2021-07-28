<?php

namespace Brain\Games\Src\Games\Prime;

use function Brain\Games\Src\Engine\engine;
use function cli\line;
use function Brain\Games\Cli\cli;

function isPrime($nu)
{
    if ($nu == 1) {
        return 0;
    }
    for ($i = 2; $i <= $nu/2; $i++) {
        if ($nu % $i == 0) {
            return 0;
        }
    }
    return 1;
}

function prime(): void
{
    $name = cli();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $attempts = 3;
    $correctAncver = '';

    for ($counter = 0; $counter < $attempts; $counter++) {  // цикл игр открывается
        $someNumber = rand(1, 100);
        $question = "{$someNumber}";
        $check = isPrime($someNumber, 10);
        if ($check === 0) {// NOT Simple
            $correctAncver = 'no';
        } elseif ($check > 0) {// Simple 100%
            $correctAncver = 'yes';
        } else {//strange situation
       // echo "strange situation with someNumber = {$someNumber} and check = {$check}\n";
             $correctAncver = 'no';
        }
        $correctAncver = (string) $correctAncver;
        //echo "the correct ancver is ";
        //var_dump($correctAncver);
        //var_dump($engine);
        $engine = engine($question, $correctAncver, $name);
        if ($engine) {
            $result = "Congratulations, {$name}!";
        } else {
            $result = "Let's try again, {$name}!";
            break;
        }
    }
    line($result);
}
