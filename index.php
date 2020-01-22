teste 3<br>
<?php echo ("teste4") ?><br>
<?php echo(getenv('DATABASE_NAME')); ?>


<?php
$servername = getenv('DATABASE_NAME');
$username = getenv('DATABASE_USER');
$password = getenv('DATABASE_PASSWORD');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>