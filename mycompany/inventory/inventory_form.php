<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("../config.php");
    $sql = "SELECT * FROM suppliers" ;
    $result = mysqli_query($conn,$sql);
?>
<body>
    <form action ="inventory_insert.php" method = "post" enctype="multipart/form-data">
        item_no<br>
        <input type = "text" name = "item_no"><br>
        item_name<br>
        <input type = "text" name = "item_name"><br>
        price<br>
        <input type = "number" name = "price"><br>
        location<br>
        <input type = "text" name = "location"><br>
        qty_on_hand<br>
        <input type = "text" name = "qty_on_hand"><br>
        reorder_pt<br>
        <input type = "text" name = "reorder_pt"><br>
        sup_no<br>
        <select name = "sup_no">

        <?php 
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<option value=".$row['sup_no'].">".$row['sup_company'];
        }
            
        ?>
        </option>
        </select>
        <br><br>

        image <BR>
        <input id="uploadimage" type = "file" name= "myfile" onchange="previewimage();"> <br>
        <img id="uploadpreview" width="100px">
        
        <br><input type = "submit" name ="submit" value="submit">

        

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