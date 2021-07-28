<?php

namespace Brain\Games\Src\Games\Progression;

use function Brain\Games\Src\Engine\engine;
use function cli\line;
use function Brain\Games\Cli\cli;

function progression(): void
{
    $name = cli();
    line('What number is missing in the progression?');
    $attempts = 3;

    for ($counter = 0; $counter < $attempts; $counter++) {
        $progressionSize = rand(6, 15);
        $position = rand(1, $progressionSize);
        //echo "position is {$position}\n";
        $tempo = rand(2, 5);
        $arr = [1];
        $question = '';
        $correctAncver = '';
        $result = '';

        for ($i = 0, $question = "{$arr[$i]}"; $i <= $progressionSize; $i++) {
            if ($i === $position) {
                $char = '..';
                $correctAncver = $arr[$position];
            } else {
                $char = $arr[$i];
            }
            $arr[] = $arr[$i] + $tempo;
            if ($i >= 1) {
                $question .= " {$char}";
            }
        }
        $correctAncver = (string) $correctAncver;
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
