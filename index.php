<!DOCTYPE html>
<html>
<head>
    <title>Telephone Directory</title>
</head>
<body>
    <h1>Telephone Directory</h1>

    <form action="add.php" method="post">
        <h2>Add New Entry</h2>
        Name: <input type="text" name="name" required>
        Phone: <input type="text" name="phone" required>
        <input type="submit" value="Add">
    </form>

    <h2>Search Directory</h2>
    <form action="search.php" method="get">
        Search: <input type="text" name="query" required>
        <input type="submit" value="Search">
    </form>

    <h2>Directory Entries</h2>
    <?php
    include 'db.php';

    $sql = "SELECT id, name, phone FROM directory";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Phone: " . $row["phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
