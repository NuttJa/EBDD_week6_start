<form action="customer_insert.php" method="POST">
        <label>รหัสลูกค้า (cust_no):</label><br>
        <input type="text" name="cust_no" required><br><br>

        <label>ชื่อลูกค้า (cust_name):</label><br>
        <input type="text" name="cust_name"><br><br>

        <label>ที่อยู่ (cust_street):</label><br>
        <input type="text" name="cust_street"><br><br>

        <label>อำเภอ/เขต (cust_city):</label><br>
        <input type="text" name="cust_city"><br><br>

        <label>จังหวัด (cust_state):</label><br>
        <input type="text" name="cust_state"><br><br>

        <label>รหัสไปรษณีย์ (cust_zip):</label><br>
        <input type="text" name="cust_zip" maxlength="4"><br><br>

        <h3>ข้อมูลที่อยู่จัดส่ง</h3>

        <label>ชื่อผู้รับ (ship_to_name):</label><br>
        <input type="text" name="ship_to_name"><br><br>

        <label>ที่อยู่จัดส่ง (ship_to_street):</label><br>
        <input type="text" name="ship_to_street"><br><br>

        <label>อำเภอ/เขต (ship_to_city):</label><br>
        <input type="text" name="ship_to_city"><br><br>

        <label>จังหวัด (ship_to_state):</label><br>
        <input type="text" name="ship_to_state"><br><br>

        <label>รหัสไปรษณีย์ (ship_to_zip):</label><br>
        <input type="text" name="ship_to_zip" maxlength="4"><br><br>

        <label>วงเงินเครดิต (credit_limit):</label><br>
        <input type="number" step="0.01" name="credit_limit"><br><br>

        <label>วันที่แก้ไขล่าสุด (last_revised):</label><br>
        <input type="date" name="last_revised"><br><br>

        <label>เงื่อนไขเครดิต (credit_terms):</label><br>
        <input type="text" name="credit_terms"><br><br>

        <?php
    include("../config.php");
    $sql = "SELECT * FROM promotion" ;
    $result = mysqli_query($conn,$sql);
?>

 pro_no<br>
        <select name = "pro_no">

        <?php 
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<option value=".$row['pro_no'].">".$row['pro_name'];
        }
            
        ?>
        </option>
        </select><br>

        <input type="submit" value="บันทึกข้อมูล">
    </form>