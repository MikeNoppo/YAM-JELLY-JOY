<?php
require 'connect_db.php';
// Fetch orders data
$sql = "SELECT customer_name, order_date, status, quantity FROM orders";
$result = $conn->query($sql);

$orders = [];
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
} else {
    echo "0 results";
}

?>