<?php

function welcom() {

	require('model/frontend.php');

	$game = getGame(1);

	$player1= $game['player1_id'];

	$player2= $game['player2_id'];

	$json = $game['json'];

	require('view/frontend/welcomView.php');

}