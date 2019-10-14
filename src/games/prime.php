<?php
namespace BrainGames\Games\Prime;
use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function play()
{
    $getQuestionAnswer = function () {
        $question = rand(2, 71);

        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
