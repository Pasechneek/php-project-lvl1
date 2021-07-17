<?php

namespace Brain\Games\Cli;

use phpDocumentor\Reflection\Types\Void_;
use SebastianBergmann\Type\VoidType;

use function cli\line;
use function cli\prompt;

function cli()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    return line("Hello, %s!", $name);
}
