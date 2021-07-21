<?php

namespace Brain\Games\Even;

use Psy\Util\Str;

use function cli\line;
use function Brain\Games\Cli\cli;
use function Brain\Games\Src\Engine\engine;

function even(): void
{
    $mesage = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = cli($mesage);
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 99);

        //line("Question: {$randomNumber}");
        //$answer = prompt('Your answer: ');

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
