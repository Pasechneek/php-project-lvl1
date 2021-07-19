<?php

namespace Brain\Games\Numbers;

use Psy\Util\Str;

use function cli\line;
use function cli\prompt;

function numbers(): string
{
    $result = '';
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 99);
        line("Question: {$randomNumber}");
        $answer = prompt('Your answer: ');
        $isEven = $randomNumber % 2 === 0;
        $correctAncver = $isEven ? 'yes' : 'no';
        if ($answer === $correctAncver) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAncver}'.");
            line("Let's try again, {$name}.");
            return $name;
        }
    }
    line("Congratulations, {$name}!");
        return $name;
}
