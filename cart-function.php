

<?php

function total_price($giohang){
    $total_price = 0;
    foreach ($giohang as $key => $value){
        $total_price += $value['quantity'] * $value['price'];
    }
    return $total_price;
}

?>
