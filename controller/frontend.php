<?php

function welcom() {

	require('model/frontend.php');

	$products = getProducts();

	require('view/frontend/welcomView.php');

}