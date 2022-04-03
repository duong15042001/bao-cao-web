<?php 
    include 'header.php';

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $show = $_POST['show'];
        //buoc 2 lưu tên của file vô database
        $sql = "INSERT INTO `category` (`id`, `name`,`slug`, `show`) VALUES (NULL, '$name','$slug', '$show');";
        // echo "<p>$sql</p>";
        $query = mysqli_query($conn, $sql);
        // var_dump($query);
        // if($query){
        //     header('location: category.php');
        // }
        // else{
        //     echo "lỗi rồi";
        // }
        echo("<script>location.href = 'view-danhmuc.php?msg=$msg';</script>");

    }    
?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới danh mục</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend>Nhập các thông tin</legend>

                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm"
                                name="name" onchange="ChangeToSlug()">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập tên sản phẩm"
                                name="slug">
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="show" id="input" value="1" checked="checked">
                                    Hiện
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="show" id="input" value="0">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="them" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>


<?php
    include 'footer.php'
?>