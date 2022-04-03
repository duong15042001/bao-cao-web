<?php
include 'header.php';
$product = mysqli_query($conn, "select * from product");

?>
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm sản phẩm</h3>
                        </div>

                    </div>
                    <a href="add-sanpham.php"> <button type="submit" class="btn btn-primary">Thêm</button>
                    </a>


                </div>
                <div class="col-md-9">


                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách sản phẩm</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Price Sale</th>
                                        <th>Category</th>
                                        <th>Miêu tả</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($product as $key => $data) {?>
                                    <tr>
                                        <td><?php echo $key +1 ?></td>
                                        <td><?php echo $data["name"] ?></td>
                                        <td><?php echo $data["slug"] ?></td>

                                        <td><img src="../uploads/<?php echo $data["image"]?>" alt="" width="50px"></td>
                                        <td><?php echo $data["price"] ?></td>
                                        <td><?php echo $data["price_sale"] ?></td>
                                        <td><?php echo $data["id_category"] ?></td>
                                        <td style="height: 10rem;overflow: hidden;display: block;
                                         display: -webkit-box;  -webkit-box-orient: vertical;-webkit-line-clamp: 6;">
                                         <?php echo $data["detail"]?></td>

                                        <td><?php echo $data["show"] ?></td>
                                        <td>
                                            <a href="delete-sanpham.php?id=<?php echo $data["id"] ?> "><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                        <td>
                                            <a href="edit-sanpham.php?id=<?php echo $data["id"] ?>"><i
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
<?php include 'footer.php';?>