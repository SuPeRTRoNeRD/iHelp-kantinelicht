<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "ihelp";
 $dbpass = "Tostiijzer2011";
 $dbname = "ihelpdmx";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
