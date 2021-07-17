<?php
namespace Brain\Games\Numbers;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\cli;

function numbers($name)
{
    $result = '';
    $name = cli();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $randomNumber = rand(0, 99);
    line("Question: {$randomNumber}");
    $answer = prompt('Your answer: ');
    var_dump($answer);
    $isEven = $randomNumber % 2 === 0;
    $correctAncver = $isEven ? 'yes' : 'no';
    var_dump($isEven);
    var_dump($correctAncver);
    $fails = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($answer === 'yes' || $isEven === true) {
            line('Correct!');
        } elseif ($answer === 'no' || $isEven === false) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAncver}'.");
            line("'lets try again, {$name}!");
            $fails++;
        }
    }
    if ($fails === 0) {
        return $result = line("Congratulations, {$name}!");
    } else {
        return $result = line("Try again, {$name}.");
    }
    return $result;
}
