<?php
function getGame($id) {
	try {

		$go_bdd = new PDO('mysql:host=localhost;dbname=test_go;charset=utf8', 'root', '');

	}
	catch (Exception $e) {

		die('Erreur : ' . $e->getMessage());

	}


	$response = $go_bdd->query('SELECT * FROM games  WHERE id = ' . $id);

	$gameData = $response->fetch();

	return $gameData;
}