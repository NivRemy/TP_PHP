<?php
function getProducts() {
	try {

		$go_bdd = new PDO('mysql:host=localhost;dbname=products_api;charset=utf8', 'root', '');

	}
	catch (Exception $e) {

		die('Erreur : ' . $e->getMessage());

	}


	$response = $go_bdd->query('SELECT * FROM products');

	$products = $response->fetchall(PDO::FETCH_ASSOC);

	return $products;
}