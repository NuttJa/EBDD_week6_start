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
$old_item_no = $_GET["old_item_no"];

$sql = "SELECT * FROM inventory WHERE item_no = '$old_item_no'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
    <form action ="inventory_save.php?old_item_no=<?php echo $old_item_no; ?>" method = "post"  enctype="multipart/form-data">
        item_no<br>
        <input type = "text" name = "item_no" value = "<?php echo $row['item_no']?>" ><br>
        item_name<br>
        <input type = "text" name = "item_name" value = "<?php echo $row['item_name']?>" ><br>
        price<br>
        <input type = "number" name = "price" value = "<?php echo $row['price']?>" ><br>
        location<br>
        <input type = "text" name = "location" value = "<?php echo $row['location']?>"  ><br>
        qty_on_hand<br>
        <input type = "text" name = "qty_on_hand" value = "<?php echo $row['qty_on_hand']?>" ><br>
        reorder_pt<br>
        <input type = "text" name = "reorder_pt" value = "<?php echo $row['reorder_pt']?>" ><br>
        sup_no<br>
        <select name = sup_no>

        <?php
    $sql2 = "SELECT * FROM suppliers ";

    $result2 = mysqli_query($conn,$sql2);

    while($row2 = mysqli_fetch_assoc($result2))
    {            
        echo "<option value=".$row2['sup_no'];
        if($row['sup_no']==$row2['sup_no'])
        {
            echo " selected";
        }
        echo ">".$row2['sup_company']."</option>";

    }
       ?>
        </select><BR><BR>

         image <BR>
        <input id="uploadimage" type = "file" name= "myfile" onchange="previewimage();"> <br>

        <?php
            if($row["image_data"]!=""){
                echo "<img id='uploadpreview' src = 'data:image/jpeg;base64,".base64_encode($row["image_data"])."' width = '100px'>";
                }
            else
            {
                echo '<img id="uploadpreview" width="100px"><br>';
            }
        ?>

        


              
        <br><input type = "submit" name ="update" value="update">

    </form>
    <script type="text/javascript">
        function previewimage ()
    {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadimage").files[0]);
        oFReader.onload = function(oFREvent){
            document.getElementById("uploadpreview").src=oFREvent.target.result;
        }
    }
    </script>
</body>
</html>