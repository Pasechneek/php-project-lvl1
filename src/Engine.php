<?php

namespace Brain\Games\Src\Engine;

use function cli\line;
use function cli\prompt;

function engine($question, $correctAncver, $name): bool
{
    line("Question: {$question}");
    $answer = prompt('Your answer: ');
    if ($answer === $correctAncver) {
        line('Correct!');
        $result = true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAncver}'.");
        $result = false;
    }
    return $result;
}
