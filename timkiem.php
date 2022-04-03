<?php
include 'header.php';
include './assets/db/connect.php';
$category = mysqli_query($conn, "SELECT * from category where `show` = 1");
$new_product = mysqli_query($conn, "SELECT * from product where `show` = 1 ORDER BY `id` DESC LIMIT 10");
//  tìm kiếm
	if(isset($_POST['search'])){
		$tukhoa = $_POST['search'];
	}
	$sql_pro = "SELECT * FROM product WHERE name LIKE '%$tukhoa%'";
	$query_pro = mysqli_query($conn,$sql_pro);
    // 
	
?>					

                    <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-list"></i>
                                Danh mục
                            </h3>
                            <?php foreach($category as $key => $value): ?>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="category.php?san-pham=<?php echo $value['slug']?>"
                                    class="category-item__link"><?php echo $value['name']?></a>
                                </li>
                            </ul>
                            <?php endforeach ?>
                        </nav>
                    </div>
                    
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class=".select-input__icon fas fa-angle-down"></i>

                                <!-- list options -->
                                <ul class="select-input__list">
                                    <!-- <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                        
                                    </li>
                                    <li class="select-input__item">
                                       
                                        <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="grid__row">
                                <!-- product item -->
                    <!-- tìm kiếm -->
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
                    <!--  -->
                        <div class="grid__column-2-4">
                                    <a class="home-product-item" href="detail.php?sp=<?php echo $row['slug']?>">
                                        <div class="home-product-item__img" style="background-image: url(uploads/<?php echo $row['image']?>) ;"></div>
                                        <h4 class="home-product-item__name"><?php echo $row['name'] ?></h4>
                                        <div class="home-product-item__price">
                                            <?php if($row['price_sale'] > 0) {?>
                                            <span class="home-product-item__price-old"><?php echo number_format($row['price'])?> đ</span>
                                            <span class="home-product-item__price-current"><?php echo number_format($row['price_sale'])?> đ</span>
                                             <?php }else{ ?>
                                            <span class="home-product-item__price-current"><?php echo number_format($row['price'])?> đ</span>
                                            <?php }?>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start--gold fas fa-star"></i>
                                                <i class="home-product-item__start--gold fas fa-star"></i>
                                                <i class="home-product-item__start--gold fas fa-star"></i>
                                                <i class="home-product-item__start--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <!-- <span class="home-product-item__sold">88 đã bán</span> -->
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <?php if($row['price_sale'] > 0) {?>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">
                                                <?php $precent = 100 - (($row['price_sale']) / ($row['price']) *100)?>
                                                <?php echo $precent; ?>%
                                            </span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                        <?php }else{ ?>
                                        <?php }?>
                                    </a>
                                </div>
<!--  -->
					
					<?php
					} 
					?>
                </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>