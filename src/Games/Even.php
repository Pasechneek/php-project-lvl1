<?php

namespace Brain\Games\Even;

use Psy\Util\Str;

use function cli\line;
use function Brain\Games\Src\Engine\engine;

function even(string $name): void
{
    $attempts = 3;
    for ($i = 0; $i < $attempts; $i++) {
        $result = '';
        $randomNumber = rand(1, 99);
        $isEven = $randomNumber % 2 === 0;
        $correctAncver = $isEven ? 'yes' : 'no';
        $question = $randomNumber;

        $engine = engine($question, $correctAncver);

        if ($engine) {
            $result = "Congratulations, {$name}!";
        } else {
            $result = "Let's try again, {$name}!";
            break;
        }
    }
    //return $result;
    line($result);
}
