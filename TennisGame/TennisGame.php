<?php


class TennisGame
{

    public $score = '';
    public function getScore($player1Name, $player2Name, $scoreOfPlayerOne, $scoreOfPlayerTwo)
    {
        $tempScore = 0;
        $isDeuce = $scoreOfPlayerOne == $scoreOfPlayerTwo;
        if ($isDeuce) {
            switch ($scoreOfPlayerOne) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        } else {
            $winScore = 4;
            $isWin = $scoreOfPlayerOne >= $winScore || $scoreOfPlayerTwo >= $winScore;
            if ($isWin) {
                $minusResult = $scoreOfPlayerOne - $scoreOfPlayerTwo;
                $isPlayerOneAdvantage = $minusResult == 1;
                if ($isPlayerOneAdvantage) $this->score = "Advantage player1";
                else {
                    $isPlayerTwoAdvantage = $minusResult == -1;
                    if ($isPlayerTwoAdvantage) $this->score = "Advantage player2";
                    else {
                        $isPlayerOneWin = $minusResult >= 2;
                        if ($isPlayerOneWin) $this->score = "Win for player1";
                        else $this->score = "Win for player2";
                    }
                }
            } else {
                for ($i = 1; $i < 3; $i++) {
                    if ($i == 1) $tempScore = $scoreOfPlayerOne;
                    else {
                        $this->score .= "-";
                        $tempScore = $scoreOfPlayerTwo;
                    }
                    switch ($tempScore) {
                        case 0:
                            $this->score .= "Love";
                            break;
                        case 1:
                            $this->score .= "Fifteen";
                            break;
                        case 2:
                            $this->score .= "Thirty";
                            break;
                        case 3:
                            $this->score .= "Forty";
                            break;
                    }
                }
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}