<?php

$title = 'Hello World';

ob_start();  // Début du content
echo '<h1>Liste des produits</h1>';
foreach ($products as $product) {
	
?>

<table>
	<tr>
		<th>Nom</th>
		<th>Description</th>
		<th>Prix</th>
	</tr>
	<tr>
		<td><?= $product['name']; ?></td>
		<td><?= $product['description']; ?></td>
		<td><?= $product['price']; ?></td>
	</tr>
</table>

<?php
}

$content = ob_get_clean();

require('template.php');

?>