<?php 
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //thực hiện truy vấn lấy ra bản ghi tương ứng với id get đc
        $product = mysqli_query($conn, "select * from category where id= $id");
        
        $pro = mysqli_fetch_assoc($product);
        // var_dump($pro);
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $slug = $_POST['slug'];

        $show = $_POST['show'];
        //buoc 2 lưu tên của file vô database
        $sql = "update `category` set `name` = '$name',`slug` = '$slug' , `show` = '$show' where id = $id";
        // echo "<p>$sql</p>";
        $query = mysqli_query($conn, $sql);
        
        echo("<script>location.href = 'view-danhmuc.php?msg=$msg';</script>");

    }    
?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Sửa danh mục</h3>
                </div>
                <div class="card-body">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend>Nhập các thông tin</legend>

                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm"
                                name="name" onchange="ChangeToSlug()" value=" <?php echo $pro['name']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập tên sản phẩm"
                                name="slug" value="<?php echo $pro['slug']?>">
                        </div>



                        <div class=" form-group">
                            <label for="">Trạng thái</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="show" id="input" value="1"
                                        <?php echo($pro['show'] == 1) ?'checked' : '' ?>>
                                    Hiện
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="show" id="input" value="0"
                                        <?php echo($pro['show'] == 0) ?'checked' : '' ?>>
                                    Ẩn
                                </label>
                            </div>
                        </div>


                        <button type="submit" name="them" class="btn btn-primary">Sửa</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>


<?php
    include 'footer.php'
?>