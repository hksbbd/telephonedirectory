<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "INSERT INTO directory (name, phone) VALUES ('$name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href='index.php'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
