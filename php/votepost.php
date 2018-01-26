<?php

require 'connection.php';
$conn    = Connect();
$vote   = $conn->real_escape_string($_POST['vote']);
$query   = "INSERT into tb_cform (vote) VALUES('" . $name . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Je vote is doorgegeven <br>";

$conn->close();

?>
