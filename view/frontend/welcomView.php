<?php

$title = 'Hello World';

ob_start();  // Début du content

?>

<p>Game : <?= $player1 . 'vs' . $player2; ?></p>

</br>

<p><?= $json; ?></p>

<?php

$game_data = json_decode($json);

print_r($game_data);

$content = ob_get_clean();

require('template.php');

?>