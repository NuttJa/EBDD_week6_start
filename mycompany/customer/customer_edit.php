<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("../config.php");
$old_cust_no = $_GET["old_cust_no"];

$sql = "SELECT * FROM customers WHERE cust_no = '$old_cust_no'";


$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
    <form action="customer_save.php?old_cust_no=<?php echo $old_cust_no; ?>" method="post">
    cust_no<br>
    <input type="text" name="cust_no" value="<?php echo $row['cust_no']; ?>"><br>

    cust_name<br>
    <input type="text" name="cust_name" value="<?php echo $row['cust_name']; ?>"><br>

    cust_street<br>
    <input type="text" name="cust_street" value="<?php echo $row['cust_street']; ?>"><br>

    cust_city<br>
    <input type="text" name="cust_city" value="<?php echo $row['cust_city']; ?>"><br>

    cust_state<br>
    <input type="text" name="cust_state" value="<?php echo $row['cust_state']; ?>"><br>

    cust_zip<br>
    <input type="text" name="cust_zip" value="<?php echo $row['cust_zip']; ?>"><br>

    ship_to_name<br>
    <input type="text" name="ship_to_name" value="<?php echo $row['ship_to_name']; ?>"><br>

    ship_to_street<br>
    <input type="text" name="ship_to_street" value="<?php echo $row['ship_to_street']; ?>"><br>

    ship_to_city<br>
    <input type="text" name="ship_to_city" value="<?php echo $row['ship_to_city']; ?>"><br>

    ship_to_state<br>
    <input type="text" name="ship_to_state" value="<?php echo $row['ship_to_state']; ?>"><br>

    ship_to_zip<br>
    <input type="text" name="ship_to_zip" value="<?php echo $row['ship_to_zip']; ?>"><br>

    credit_limit<br>
    <input type="number" step="0.01" name="credit_limit" value="<?php echo $row['credit_limit']; ?>"><br>

    last_revised<br>
    <input type="date" name="last_revised" value="<?php echo $row['last_revised']; ?>"><br>

    credit_terms<br>
    <input type="text" name="credit_terms" value="<?php echo $row['credit_terms']; ?>"><br>

     pro_no<br>
        <select name = pro_no>

        <?php
    $sql2 = "SELECT * FROM promotion ";

    $result2 = mysqli_query($conn,$sql2);

    while($row2 = mysqli_fetch_assoc($result2))
    {            
        echo "<option value=".$row2['pro_no'];
        if($row['pro_no']==$row2['pro_no'])
        {
            echo " selected";
        }
        echo ">".$row2['pro_name']."</option>";

    }
       ?>
        </select>

    <input type="submit" name="update" value="Update">
</form>

</html>