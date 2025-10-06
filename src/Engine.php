<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame($rules, $namespace)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line("{$rules}");

    $numberOfTours = 3;

    // Вместо этого решения можно использовать callable-синтаксис, он элегантнее
    $functionParts = [$namespace, 'gameRound'];  
    $function = implode('\\', $functionParts);

    for ($i = 0; $i < $numberOfTours; $i++) {

        [$question, $answerCorrect] = $function();

        line("Question: %s", $question);
        $answerUser = prompt('Your answer');

        if ($answerCorrect != $answerUser) {

            line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            line("Let's try again, {$name}!");
            return;  // Лучше не использовать exit для заврешения скрипта, т.к. он предназначен для аварийных случаев
        } 
        line("Correct!");
    } 

line("Congratulations, {$name}!");

}
