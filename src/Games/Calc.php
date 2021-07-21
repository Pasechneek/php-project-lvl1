<?php

namespace Brain\Games\Src\Games\Calc;

use function Brain\Games\Src\Engine\engine;
use function cli\line;
use function Brain\Games\Cli\cli;

function calc(): void
{
    line('What is the result of the expression?');
    $name = cli();
    $attempts = 3;
    for ($i = 0; $i < $attempts; $i++) {
        $first = rand(1, 10);
        $second = rand(1, 10);
        $operands = ["+", "-", "*"];
        $key = array_rand($operands, 1);
        $randOperand = $operands[$key];
        if ($randOperand === "+") {
            $correctAncver = $first + $second;
        } elseif ($randOperand === "-") {
            $correctAncver = $first - $second;
        } elseif ($randOperand === "*") {
            $correctAncver = $first * $second;
        }
        $question = "{$first} {$randOperand} {$second}";
        $correctAncver = (string) $correctAncver;
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
