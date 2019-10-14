<?php
namespace BrainGames\Games\Gcd;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function findGcd($a, $b)
{
    $a < $b ? $min = $a : $min = $b;
    for ($i = $min; $i > 0; $i--) {
        if ($a % $i == 0 && $b % $i == 0) {
            return $i;
        }
    }
}

function play()
{
    $getQuestionAnswer = function () {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $question = "$a $b";
        $correctAnswer = findGcd($a, $b);
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
