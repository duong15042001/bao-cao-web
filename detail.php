<?php
    include 'header.php';
    include './assets/db/connect.php';
    $category = mysqli_query($conn, "SELECT * from category where `show` = 1");
    if(isset($_GET['sp']))//lấy từ trang_sp
    $slug = $_GET['sp'];
    $product = mysqli_query($conn, "SELECT * from product WHERE `slug` = '$slug'");
    $data = mysqli_fetch_assoc($product);
    
     $cart = (isset($_SESSION['giohang']))? $_SESSION['giohang'] :[];

?>

<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column">
            
            <form action="./giohang.php" method="get">
                <div class="home__detail">
                    <div class="home__detail__img">
                        <img class="home__detail__img-main" src="uploads/<?php echo $data['image']?>" width="400"alt="">
                        <p>
                            <img src="uploads/<?php echo $data['image']?>" width ="90" alt="">
                        </p>
                    </div>
                    <div class="home__detail__content">
                        <div class="home__detail__content--name">
                            <div class="home__detail__content--name-like"><span>Yêu Thích</span></div>
                            <span class="home__detail__content--name-p"><?php echo $data['name']?></span>
                        </div>

                        
                        
                        <div class="home__detail__content--price">
                            <?php if($data['price_sale'] > 0) {?>
                            <span class="home__detail__content--price-old"><?php echo number_format($data['price'])?> đ</span>
                            <span class="home__detail__content--price-current"><?php echo number_format($data['price_sale'])?> đ</span>
                            <?php }else{ ?>
                            <span class="home__detail__content--price-current-alone"><?php echo number_format($data['price'])?> đ</span>
                            <?php }?>

                            <?php if($data['price_sale'] > 0) {?>
                                <div class="home__detail__content--price-precent">
                                    <span class="home__detail__content--price-precent--">
                                        <?php $precent = 100 - (($data['price_sale']) / ($data['price']) *100)?>
                                        <?php echo $precent; ?>%
                                    </span>
                                    <span class="home__detail__content--price-precent--">GIẢM</span>
                                </div>
                                <?php }else{ ?>
                                    <?php }?>
                        </div>


                        <div class="home__detail__content--deal">
                            <span class="home__detail__content--deal-name">Deal Sốc</span>
                            <div class="home__detail_content--deal-price"><span>Mua Kèm Deal Sốc</span></div>
                        </div>

                        <div class="home__detail__content--ship">
                            <span class="home__detail__content--ship-name">Vận Chuyển</span>
                            <i class="home__detail__content--ship-icon fas fa-shipping-fast"></i>
                            <div class="home__detail__content--ship-format">
                                <div class="home__detail__content--ship-format-name">
                                    <span>Vận chuyển tới</span>
                                    <a class="detail__format-ship">Huyện Ba Vì</a>
                                    <i class="detail__format-ship-icon fas fa-chevron-down"></i>
                                </div>
                                <div class="home__detail__content--ship-format-price">
                                    <span>Phí vận chuyển</span>
                                    <a class="detail__format-ship">Không hỗ trợ</a>
                                    <i class="detail__format-ship-icon fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                     
                        <div class="home__detail__content--quantity">
                            <span class="home__detail__content--quantity-name">Số lượng</span>
                            <div class="quantity__button">
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="quantity__button-input" max="10000" min="1" name="quantity" type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                            </div>
                            <!-- <span class="home__detail_content--quantyty-product"><?php echo mysqli_num_rows($product)?> sản phẩm có sẵn</span> -->
                        </div>

                        
                        <div class="home__detail__content--button">
                             <!-- <a href=" " class="home__detail__content--button-add">
                                <i class="home__detail__content--button-add-icon fas fa-cart-plus"></i>
                                <span>Thêm Vào Giỏ Hàng</span>
                            </a> -->

                            <p>
                                <button class="home__detail__content--button-add" type="submit"class="btn btn-warning btn-lg">
                                    <i class="home__detail__content--button-add-icon fas fa-cart-plus"></i>
                                    <span>Thêm Vào Giỏ Hàng</span>
                                </button>
                            </p>
                            
                            <a href="payment.php" class="home__detail__content--button-buy">
                                <span>Đặt Hàng</span>
                            </a>
                        </div>
                       
                        
                        
                        <div class="home__detail__content---"></div>

                        <div class="home__detail__content-shoppee">
                            <a class="home__detail__content-shoppee--icon" href=""><i class="home__detail__content-shoppee-icon fas fa-shield-alt"></i></a>
                            <a class="home__detail__content-shoppee-commit" href=""><span>Shoppee Đảm Bảo</span></a>
                            <a class="home__detail__content-shoppee-money" href=""><span>3 Ngày Trả Hàng/Hoàn Tiền</span></a>
                        </div>
                    </div>
                </div>

                </form>
            </div>


            <div class="grid__column__2">
                <div class="grid__column__2-1">
                            <span class="column__1">MÔ TẢ SẢN PHẨM</span>
                </div>
                <div class="grid__column__2-2">
                            <p><?php echo $data['detail']?></p>
            </div>


        </div>
    </div>

 






    <!-- <script>
$('input.quantity__button-input ').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
</script>

</div> -->


<?php include 'footer.php' ?>