<?php

namespace Brain\Games\Even;

use Psy\Util\Str;

use function cli\line;
use function Brain\Games\Cli\cli;
use function Brain\Games\Src\Engine\engine;

function even(): void
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = cli();
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 99);
        $isEven = $randomNumber % 2 === 0;
        $correctAncver = $isEven ? 'yes' : 'no';
        $question = $randomNumber;

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
