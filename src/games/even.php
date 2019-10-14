<?php
namespace BrainGames\Games\Even;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number)
{
    return $number % 2 == 0;
}

function play()
{
    $getQuestionAnswer = function () {
        $question = rand(1, 99);
        $correctAnswer = '';
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
