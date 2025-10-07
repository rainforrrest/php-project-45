<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_TOURS = 3;

function runGame(string $rules, callable $gameRound): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line("{$rules}");

    // Можно использовать callable-синтаксис, он элегантнее
    // Можно массив вопрос-ответы на 3 раунда сразу собирать в скрипте, потом передавать сюда в движок
    // Вариант с массивом подойдет, если у разных игр разное кол-во раундов

    for ($i = 0; $i < NUMBER_OF_TOURS; $i++) {
        [$question, $answerCorrect] = $gameRound();

        line("Question: %s", $question);
        $answerUser = prompt('Your answer');

        if ($answerCorrect != $answerUser) {
            line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            line("Let's try again, {$name}!");
            return;
            // Лучше не использовать exit для заврешения скрипта, т.к. он предназначен для аварийных случаев
        }
        line("Correct!");
    }

    line("Congratulations, {$name}!");
}
