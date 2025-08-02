<?php
include("../config.php"); // หรือใส่โค้ดเชื่อมต่อฐานข้อมูลตรงนี้

$sql = "SELECT * FROM customers LEFT JOIN promotion ON customers.pro_no = promotion.pro_no ";
$result = mysqli_query($conn, $sql);

echo "<a href='customer_form.php'>INSERT NEW CUSTOMER</a>";
echo "<table border='1'>";
echo "<tr>";
echo   "<th>cust_no</th>";
echo   "<th>cust_name</th>";
echo   "<th>cust_city</th>";
echo   "<th>cust_state</th>";
echo   "<th>cust_zip</th>";
echo   "<th>credit_limit</th>";
echo   "<th>pro_name</th>";
echo   "<th>EDIT</th>";
echo   "<th>DELETE</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['cust_no'] . "</td>";
    echo "<td>" . $row['cust_name'] . "</td>";
    echo "<td>" . $row['cust_city'] . "</td>";
    echo "<td>" . $row['cust_state'] . "</td>";
    echo "<td>" . $row['cust_zip'] . "</td>";
    echo "<td>" . $row['credit_limit'] . "</td>";
    echo "<td>" . $row['pro_name'] . "</td>";
    echo "<td><a href='customer_edit.php?old_cust_no=" . $row['cust_no'] . "'>edit</a></td>";
    echo "<td><a href='customer_delete.php?cust_no=" . $row['cust_no'] . "'>delete</a></td>";
    echo "</tr>";
}

echo "</table>";
?>
