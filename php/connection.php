
5
6
7
8
9
10
11
12
13
14
15
16
17
<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "responses";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
