<?php
include 'header.php';
$product = mysqli_query($conn, "select * from users");

?>
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm khách hàng</h3>
                        </div>

                    </div>
                    <a href="add-khachhang.php"> <button type="submit" class="btn btn-primary">Thêm</button>
                    </a>


                </div>
                <div class="col-md-8">


                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách khách hàng</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên người dùng</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($product as $key => $data) {?>
                                    <tr>
                                        <td><?php echo $key +1 ?></td>
                                        <td><?php echo $data["name"] ?></td>
                                        <td><?php echo $data["email"] ?></td>
                                        <td><?php echo $data["address"] ?></td>
                                        <td><?php echo $data["phone"] ?></td>
                                        <td>
                                            <a href="delete-khachhang.php?id=<?php echo $data["id"] ?> "><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                        <td>
                                            <a href="edit-khachhang.php?id=<?php echo $data["id"] ?>"><i
                                                    class="fa fa-tag"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'?>