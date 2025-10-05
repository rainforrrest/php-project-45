<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame($rules, callable $gameRound)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line("{$rules}");

    $numberOfTours = 3;


    for ($i = 0; $i < $numberOfTours; $i++) {

        [$question, $answerCorrect] = $gameRound();

        line("Question: %s", $question);
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
