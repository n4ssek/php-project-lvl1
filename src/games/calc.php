<?php
namespace BrainGames\Games\Calc;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function play()
{
    $getQuestionAnswer = function () {
        $operator = OPERATORS[array_rand(OPERATORS)];
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "$a $operator $b";
        switch ($operator) {
            case '+':
                $correctAnswer = $a + $b;
                break;
            case '-':
                $correctAnswer = $a - $b;
                break;
            case '*':
                $correctAnswer = $a * $b;
                break;
        }
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
