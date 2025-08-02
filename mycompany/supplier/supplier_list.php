<?php
include("../config.php");

$sql = "SELECT * FROM suppliers";
$result = mysqli_query($conn, $sql);

echo "<a href='supplier_form.php'>INSERT NEW SUPPLIER</a>";
echo "<table border='1'>";
echo "<th>sup_no</th>";
echo "<th>sup_company</th>";
echo "<th>sup_contact</th>";
echo "<th>sup_telephone</th>";
echo "<th>sup_email</th>";
echo "<th>EDIT</th>";
echo "<th>DELETE</th>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['sup_no'] . "</td>";
    echo "<td>" . $row['sup_company'] . "</td>";
    echo "<td>" . $row['sup_contact'] . "</td>";
    echo "<td>" . $row['sup_telephone'] . "</td>";
    echo "<td>" . $row['sup_email'] . "</td>";
    echo "<td><a href='supplier_edit.php?old_sup_no=" . $row['sup_no'] . "'>edit</a></td>";
    echo "<td><a href='supplier_delete.php?sup_no=" . $row['sup_no'] . "'>delete</a></td>";
    echo "</tr>";
}

echo "</table>";
?>
