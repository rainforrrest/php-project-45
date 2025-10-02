<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use BrainGames\Cli;

function isEven($value)
{
    return $value % 2 === 0;
}

function even()
{    
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    
    for ($i = 0; $i < 3; $i++) {

        $number = rand(1, 100);
        line("Question: %s", $number);
        $answerCorrect = isEven($number) ? 'yes' : 'no';
        $answerUser = prompt('Your answer');

        if ($answerCorrect == $answerUser) {
            line("Correct!");
        } else {
            line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            line("Let's try again, {$name}!");
            exit;
        }

    }

    line("Congratulations, {$name}!");
}
