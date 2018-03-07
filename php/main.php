<?php
date_default_timezone_set("Europe/Amsterdam");
$tijdsinterval = 1;
$dbhost = "localhost";
$dbuser = "********";
$dbpass = "*************";
$dbname = "ihelpdmx";

$PDO = new PDO('mysql:dbname='.$dbname.';host=localhost', $dbuser, $dbpass);
$query = $PDO->prepare('UPDATE kleuren SET votes = 0');

function SENDDMX()
{
    $dagvandeweek = date("D");
    if ($dagvandeweek == "Mon" or $dagvandeweek == "Tue" or $dagvandeweek == "Wed" or $dagvandeweek == "Thu" or $dagvandeweek == "Fri"){
        if (date('H') == "08" and date('i') == "00") {
            system('python /home/pi/Documents/ihelpled/iHelp-kantinelicht/python/definitieve_script/defsenddmx.py');
        }
    }
}


function LEEGDMX()
{
// mysql_select_db(ihelpdmx);
$minuut = date("i");
$seconden = date("s");
$minuutgedeelddoorplus = ($minuut+5)/5;
if (is_int($minuutgedeelddoorplus) and $seconden == 00) {
    $result = $query->execute();
    }
}

while (true) {
    $minuut = date("i");
    $seconden = date("s");
    // $minuutgedeelddoorplus = ($minuut + $tijdsinterval) / $tijdsinterval;
    SENDDMX();
    LEEGDMX();
    $bedtijd = 1 - date('u')/1000000;
    sleep($bedtijd);
}
?>
