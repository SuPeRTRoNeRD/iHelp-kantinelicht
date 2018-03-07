<?php
$dbhost = "localhost";
$dbuser = "ihelp";
$dbpass = "Tostiijzer2011";
$dbname = "ihelpdmx";
 // Create connection

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
echo "        <h1 id='title'>Bedankt voor het stemmen!</h1>";
echo "    </header>";
echo "    <article>";
echo "            <p id='timerTitle'>Volgende kleur over:</p>";
echo "        <div id='timerContainer'>";
echo "            <p id='time'></p>";
echo "        </div>";
echo "    </article>";
echo "    <script>";
echo "        setInterval(function () {";
echo "            var now = new Date();";
echo "            var minutesN = now.getMinutes();";
echo "            var secondsN = now.getSeconds();";
echo "            var nextTime = 4 - minutesN % 5;";
echo "            var minutes = nextTime;";
echo "            var seconds = 59 - secondsN;";
echo "            if (seconds < 10) { seconds = '0' + seconds; };";
echo "            now = minutes + ':' + seconds;";
echo "            document.getElementById('time').innerHTML = '<br>' + now;";
echo "        }, 1000);</script>";
echo "</body>";
echo "";
echo "</html>";
?>
