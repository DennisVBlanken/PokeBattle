<?php
require("Pokemon.php");
require("Enemy.php");
$pokemon = new Pokemon;
$enemy = new Enemy;

echo $pokemon->name," ",$pokemon->health,"/",$pokemon->hp,"<br>";
echo $enemy->name," ",$enemy->health,"/",$enemy->hp,"<br>";

$enemy->health = $enemy->health - $pokemon->electricRing;
echo "<br>",$enemy->name," ",$enemy->health,"/",$enemy->hp,"<br>";

$pokemon->health = $pokemon->health - $enemy->flare;
echo $pokemon->name," ",$pokemon->health,"/",$pokemon->hp;
?>