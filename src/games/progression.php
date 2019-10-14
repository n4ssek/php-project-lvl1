<?php
namespace BrainGames\Games\Progression;
use function \BrainGames\Engine\engine;

const DESCRIPTION = 'What number is missing in the progression?';
const LENGHT_PROGRESSION = 10;

function play()
{
    $getQuestionAnswer = function () {
        $first = rand(1, 10);
        $hiddenElementPosition = rand(0, LENGHT_PROGRESSION - 1);
        $stepProgression = rand(1, 5);
        $question = '';
        for ($i = 0; $i < LENGHT_PROGRESSION; $i++) {
            $item = $first + ($stepProgression * $i);
            if ($i == ($hiddenElementPosition)) {
                $question = "$question ..";
                $correctAnswer = $item;
            } else {
                $question = "$question $item";
            }
        }
        $question = trim($question);
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
