<?php 
    include 'header.php';

    $category = mysqli_query($conn, "select * from category");
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $slug = $_POST['slug'];

        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $id_category = $_POST['id_category'];
        $detail = $_POST['detail'];
        $show = $_POST['show'];
     if($_FILES['image']['error']==0){
         //bước 1 chuyển file từ bộ nhớ tmp_name vào thư mục uploads đã tạo 
         $file = $_FILES['image'];
         $file_name = $file['name'];
         move_uploaded_file($file['tmp_name'],  '../uploads/'.$file_name);
        
         //buoc 2 lưu tên của file vô database
         $sql = "INSERT INTO `product` (`id`, `name`,`slug`, `price`, `price_sale`, `image`, `id_category`,`detail`, `show`) VALUES (NULL, '$name','$slug', '$price', '$price_sale', '$file_name', '$id_category','$detail', '$show');";
        //  echo "<p>$sql</p>";
         $query = mysqli_query($conn, $sql);
        
        echo("<script>location.href = 'view-sanpham.php?msg=$msg';</script>");

     }
     else{
         echo "upload file lỗi";
     }   
    }
?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới sản phẩm</h3>
                </div>
                <div class="card-body">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend>Nhập các thông tin</legend>

                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm"
                                name="name" onchange="ChangeToSlug()">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập tên sản phẩm"
                                name="slug">
                        </div>
                        <div class=" form-group">
                            <label for="">Giá</label>
                            <input type="text" class="form-control" id="" placeholder="Giá" name="price">
                        </div>
                        <div class=" form-group">
                            <label for="">Giá giảm</label>
                            <input type="text" class="form-control" id="" placeholder="Giá" name="price_sale">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control" id="" placeholder="Hình ảnh" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select id="input" class="form-control" name="id_category">
                                <option value="">----Lựa chọn danh mục----</option>
                                <?php foreach($category as $cate) {?>
                                <option value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Chi tiết</label>
                            <!-- <input type="text" class="form-control" id="" placeholder="Nhập chi tiết" name="detail"> -->
                            <textarea name="detail" id="input" class="form-control" placeholder="Nhập chi tiết" rows="6"></textarea>
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