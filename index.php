teste 3<br>
<?php echo ("teste4") ?><br>
<?php echo(getenv('DATABASE_NAME')); ?>


<?php
$servername = getenv('DATABASE_HOST');
$username = getenv('DATABASE_USER');
$password = getenv('DATABASE_PASSWORD');

echo ($servername." ".$username." ".$password);
phpinfo();

$dbconn = pg_connect("host=".$servername." dbname=".getenv('DATABASE_NAME')." user=".$username." password=".$password)
    or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM public.user';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

print_r($result);
?>