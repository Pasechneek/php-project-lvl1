<?php

namespace Brain\Games\Cli;

  use function cli\line;
  use function cli\prompt;

  line('Welcome to the Brain Game!');
  //line('May I have your name?');
  $name = prompt('May I have your name?');
  //$name = trim(fgets(STDIN));
  line("Hello, %s!", $name);
