<?php
include 'header.php';
$product = mysqli_query($conn, "select * from category");

?>
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm danh mục</h3>
                        </div>

                    </div>
                    <a href="add-danhmuc.php"> <button type="submit" class="btn btn-primary">Thêm</button>
                    </a>


                </div>
                <div class="col-md-8">


                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách danh mục</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên danh mục</th>
                                        <th>Slug</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($product as $key => $data) {?>
                                    <tr>
                                        <td><?php echo $key +1 ?></td>
                                        <td><?php echo $data["name"] ?></td>
                                        <td><?php echo $data["slug"] ?></td>
                                        <td><?php echo $data["show"] ?></td>
                                        <td>
                                            <a href="delete-danhmuc.php?id=<?php echo $data["id"] ?> "><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                        <td>
                                            <a href="edit-danhmuc.php?id=<?php echo $data["id"] ?>"><i
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