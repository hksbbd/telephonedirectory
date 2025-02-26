<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    include 'db.php';

    $query = $_GET['query'];

    $sql = "SELECT id, name, phone FROM directory WHERE name LIKE '%$query%' OR phone LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Phone: " . $row["phone"]. "<br>";
        }
    } else {
        echo "No results found";
    }

    $conn->close();
    ?>

    <a href="index.php">Go back</a>
</body>
</html>
