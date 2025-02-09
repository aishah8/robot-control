<?php

include('db_connect.php');  

$sql = "SELECT * FROM directions_4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    echo "<table border='1'><tr><th>ID</th><th>Direction</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["direction"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>