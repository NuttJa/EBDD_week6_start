<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php
  include("../comp/css.php");
  ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->


    <!-- Navbar -->
    <?php
    include("../comp/preloader.php");
    include("../comp/navebar.php");
    include("../comp/aside.php");
    ?>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

     

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <div class="card-header">
                 <a class = "btn btn-primary" href = 'inventory_form.php'> INSERT NEW INVENTORY</a>
                </div>




                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <th>item_image</th>
                      <th>item_no</th>
                      <th>item_name</th>
                      <th>price</th>
                      <th>location</th>
                      <th>qty_on_hand</th>
                      <th>reorder_pt </th>
                      <th>sup_company </th>
                      <th>EDIT</th>
                      <th>DELETE</th> <!-- <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr> -->

                    </thead>
                    <tbody>

                      <?php
                      include("../config.php");


                      $sql = "SELECT * FROM inventory LEFT JOIN suppliers ON inventory.sup_no = suppliers.sup_no  ";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>";
                        if ($row["image_data"] != "") {
                          echo "<img src = 'data:image/jpeg;base64," . base64_encode($row["image_data"]) . "' width = '100px'>";
                        }
                        echo "<td>";
                        echo $row['item_no'];
                        echo "<td>";
                        echo $row['item_name'];
                        echo "<td>";
                        echo $row['price'];
                        echo "<td>";
                        echo $row['location'];
                        echo "<td>";
                        echo $row['qty_on_hand'];
                        echo "<td>";
                        echo $row['reorder_pt'];
                        echo "<td>";
                        echo $row['sup_company'];
                        echo "<td>";
                        echo "<a class = 'btn btn-warning' href = inventory_edit.php?old_item_no=" . $row['item_no'] . ">edit</a>";
                        echo "<td>";

                        echo "<a class = 'btn btn-danger' href = inventory_delete.php?item_no=" . $row['item_no'] . ">delete</a>";
                      }

                      ?>


                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include("../comp/footer.php");
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php
  include("../comp/javascript.php");
  ?>

</body>

</html>