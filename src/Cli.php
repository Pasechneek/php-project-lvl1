<?php

namespace Brain\Games\Cli;

  use function cli\line;
  use function cli\prompt;

  line('Welcome to the Brain Game!');
  //$name = prompt('May I have your name?');
  $name = trim(fgets(STDIN));
  var_dump($name);
if ($name === false) {
    $name = "Danil";
}
line("Hello, %s!", $name);
