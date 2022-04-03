<?php include 'header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div style="max-width: 1200px;" class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    
                   
                    <div class="inner">
                            <?php
                            $query = "SELECT id FROM category ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row_nhom = mysqli_num_rows($query_run);
                            echo '<h3>' .$row_nhom. '<h3>';
                        ?>
                            <h3>Nhóm sản phẩm</h3>
                    </div>
                       
                    
                    <div class="icon">
                            <i class="menu-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    
                    
                    <div class="inner">
                        <?php
                        $query = "SELECT id FROM product ORDER BY id";
                        $query_run = mysqli_query($conn, $query);
                        $row_sp = mysqli_num_rows($query_run);
                        echo '<h3>' .$row_sp. '<h3>';
                        ?>
                            <h3>Sản phẩm</h3>
                    </div>
                        
                        
                        <div class="icon">
                            <i class="ion-fork"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">


                    <div class="inner">
                            <?php
                            $query = "SELECT id FROM users ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row_kh = mysqli_num_rows($query_run);
                            echo '<h3>' .$row_kh. '<h3>'
                            ?>
                             <h3>Khách hàng</h3>
                        </div>
                        
                        
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    
                    
                    <div class="inner">
                            <?php
                            $query = "SELECT id FROM orders ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row_dh = mysqli_num_rows($query_run);
                            echo '<h3>' .$row_dh. '<h3>'
                            ?>
                             <h3>Đơn hàng</h3>
                        </div>
                        
                        
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->


                
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php
        $query = "SELECT id FROM orders WHERE MONTH(date) = 1 ORDER BY id";
        $query_run = mysqli_query($conn, $query);
        $row_t1 = mysqli_num_rows($query_run);

        $query = "SELECT id FROM orders WHERE MONTH(date) = 2 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t2 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 3 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t3 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 4 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t4 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 5 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t5 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 6 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t6 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 7 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t7 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 8 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t8 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 9 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t9 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 10 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t10 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 11 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t11 = mysqli_num_rows($query_run);

       $query = "SELECT id FROM orders WHERE MONTH(date) = 12 ORDER BY id";
       $query_run = mysqli_query($conn, $query);
       $row_t12 = mysqli_num_rows($query_run);


    ?>
    <div class="row">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([

            ['Tháng', 'Đơn hàng'],
            <?php
            $text = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8',
             'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'];
            $value = [$row_t1, $row_t2, $row_t3, $row_t4, $row_t5, $row_t6, $row_t7, $row_t8, $row_t9, $row_t10, $row_t11, $row_t12 ];
            for($i=0;$i<12;$i++){
                echo "['".$text[$i]."','".$value[$i]."'],";

            }
            ?>
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<div id="columnchart_material" style="margin-top: 100px; margin-left: 100px;width: 1100px; height: 500px;"></div> <!--căn chỉnh biểu đồ-->


    </div>
</div>
<!-- /.content-wrapper -->


<?php include 'footer.php' ?>