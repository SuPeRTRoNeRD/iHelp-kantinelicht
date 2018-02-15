<?php

require 'connection.php';
$conn    = Connect();
$vote   = $conn->real_escape_string($_POST['color']);
$query   = "INSERT into kleuren (vote) VALUES('" . $vote . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Je stem is doorgegeven <br>";

$conn->close();

?>
