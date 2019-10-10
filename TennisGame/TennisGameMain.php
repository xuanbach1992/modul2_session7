<?php
include 'TennisGame.php';
$tennisGame = new TennisGame();
$playerOne = 'player1';
$playerTwo = 'player2';
$scoreOfPlayerOne = 6;
$scoreOfPlayerTwo = 8;
$tennisGame->getScore($playerOne, $playerTwo, $scoreOfPlayerOne, $scoreOfPlayerTwo);
echo $tennisGame;
