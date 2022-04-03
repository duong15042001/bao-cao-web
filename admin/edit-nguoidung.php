<?php 
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //thực hiện truy vấn lấy ra bản ghi tương ứng với id get đc
        $product = mysqli_query($conn, "select * from member where id= $id");
        
        $pro = mysqli_fetch_assoc($product);
        // var_dump($pro);
    }
    if(isset($_POST['name'])){
        $email= $_POST['email'];
        $password = $_POST['password'];
        $ten = $_POST['name'];
        $diachi = $_POST['address'];
        $sdt = $_POST['phone'];
        $chucvu = $_POST['position'];
        //buoc 2 lưu tên của file vô database
        $sql = "update `member` set `email` = '$email',`password` = '$password' , `name` = '$ten', `address` = '$diachi', `phone` = '$sdt', `position` = '$chucvu'  where id = $id";
        // echo "<p>$sql</p>";
        $query = mysqli_query($conn, $sql);
        
        echo("<script>location.href = 'view-nguoidung.php?msg=$msg';</script>");

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
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập email"
                                name="email" onchange="ChangeToSlug()" value=" <?php echo $pro['email']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập password"
                                name="password" value=" <?php echo $pro['password']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tên người dùng</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập tên người dùng"
                                name="name" value=" <?php echo $pro['name']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập địa chỉ"
                                name="address" value=" <?php echo $pro['address']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập số điện thoại"
                                name="phone" value=" <?php echo $pro['phone']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập chức vụ"
                                name="position" value=" <?php echo $pro['position']?>">
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