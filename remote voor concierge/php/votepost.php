<?php
$dbhost = "localhost";
$dbuser = "ihelp";
$dbpass = "***********";
$dbname = "ihelpdmx";
 // Create connection

//hier moeten de python functies direct worden doorgegeven in plaats van met de mysql database
//ik heb alle kleuren al in de python folder op cd Documents/ihelpled/iHelp-kantinelicht/python senddmx_white.py = uit
$PDO = new PDO('mysql:dbname='.$dbname.';host=localhost', $dbuser, $dbpass);
$query = $PDO->prepare('UPDATE kleuren SET votes = votes + 1 WHERE kleur = :kleur');

$result = $query->execute(array(':kleur' => $_POST['color']));
echo "<!DOCTYPE html>";
echo "<html lang='nl'>";
echo "";
echo "<head>";
echo "    <title>iHelp - KantineLED";
echo "    </title>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <link rel='stylesheet' href='../css/style.css'>";
echo "</head>";
echo "";
echo "<body>";
echo "    <header>";
echo "        <h1 id='title'>Het licht is veranderd is veranderd</h1>";
echo "    </header>";
echo "    <article>";
echo "</body>";
echo "";
echo "</html>";
?>
