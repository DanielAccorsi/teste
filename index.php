<?php
$db = getenv('DATABASE_NAME')
$servername = getenv('DATABASE_HOST');
$username = getenv('DATABASE_USER');
$password = getenv('DATABASE_PASSWORD');

echo ($servername." ".$db." ".$username." ".$password."<br/><br/>");
# phpinfo();

$dbconn = pg_connect("host=".$servername." dbname=".getenv('DATABASE_NAME')." user=".$username." password=".$password)
    or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM user';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());


while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo($line[0]."<br/>");
    echo($line[1]."<br/>");
}


?>