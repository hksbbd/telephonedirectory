<?php
#$servername = getenv('DB_HOST');
#$servername = "mysql"
#$username = getenv('DB_USER');
#$password = getenv('DB_PASSWORD');
#$dbname = getenv('DB_NAME');

$servername = 'mysql';
$dbname = 'visitor_management';
$username = 'root';
$password = 'rootpassword';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
