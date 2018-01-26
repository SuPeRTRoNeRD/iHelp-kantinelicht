?php
 
 
function Connect()
{
 $dbhost = "IP moet ik nog weten";
 $dbuser = "root";
 $dbpass = "Kantine";
 $dbname = "votes";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
