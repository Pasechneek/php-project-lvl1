<?php

namespace Brain\Games\Cli;

use phpDocumentor\Reflection\Types\Void_;
use SebastianBergmann\Type\VoidType;

use function cli\line;
use function cli\prompt;

function cli()
{
    line('Welcome to the Brain Game!');
    global $name;
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
