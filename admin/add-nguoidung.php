<?php 
    include 'header.php';
    
    if(isset($_POST['name'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ten = $_POST['name'];
        $diachi = $_POST['address'];
        $sdt = $_POST['phone'];
        $chucvu = $_POST['position'];
        //buoc 2 lưu tên của file vô database
        $sql = "INSERT INTO `member` (`id`, `email`,`password`, `name`, `address`,`phone`, `position`) VALUES (NULL, '$email','$password', '$ten', '$diachi','$sdt', '$chucvu');";
        // echo "<p>$sql</p>";
        $query = mysqli_query($conn, $sql);
        // var_dump($query);
        // if($query){
        //     header('location: category.php');
        // }
        // else{
        //     echo "lỗi rồi";
        // }
        echo("<script>location.href = 'view-nguoidung.php?msg=$msg';</script>");

    }    
?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới người dùng</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend>Nhập các thông tin</legend>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập email"
                                name="email" onchange="ChangeToSlug()">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập password"
                                name="password">
                        </div>
                        <div class="form-group">
                            <label for="">Tên người dùng</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập tên người dùng"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập địa chỉ"
                                name="address">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập số điện thoại"
                                name="phone">
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <input type="text" class="form-control" id="slug" placeholder="Nhập chức vụ"
                                name="position">
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