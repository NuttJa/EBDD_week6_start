<?php
include("../config.php");


$sql = "SELECT * FROM inventory LEFT JOIN suppliers ON inventory.sup_no = suppliers.sup_no  ";
$result = mysqli_query($conn,$sql);
echo "<a href = 'inventory_form.php'> INSERT NEW INVENTORY</a>";
echo  "<table border = '1'>";
echo   "<th>item_image</th>";
echo   "<th>item_no</th>";
echo   "<th>item_name</th>";
echo   "<th>price</th>";
echo   "<th>location</th>";
echo   "<th>qty_on_hand</th>";
echo   "<th>reorder_pt </th>";
echo   "<th>sup_company </th>";
echo   "<th>EDIT</th>";
echo   "<th>DELETE</th>";
while ($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>";
    if($row["image_data"]!=""){
    echo "<img src = 'data:image/jpeg;base64,".base64_encode($row["image_data"])."' width = '100px'>";
    }
    echo "<td>";echo $row['item_no'];
    echo "<td>";echo $row['item_name'];
    echo "<td>";echo $row['price'];
    echo "<td>";echo $row['location'];
    echo "<td>";echo $row['qty_on_hand'];
    echo "<td>";echo $row['reorder_pt'];
    echo "<td>";echo $row['sup_company'];
    echo "<td>";echo "<a href = inventory_delete.php?item_no=".$row['item_no'].">delete</a>";
    echo "<td>";echo "<a href = inventory_edit.php?old_item_no=".$row['item_no'].">edit</a>";
}

?>