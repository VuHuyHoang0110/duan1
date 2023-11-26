<div class="card text-center">
    <div class="card-header">
        SẢN PHẨM
    </div>
    <div class="card-body p-0">
        <?php
        $i=1;
        if (isset($_SESSION['cart'])){

        
        foreach($_SESSION['cart'] as $pro){
        
        ?>
        <div class="d-flex">
            <div class="p-2 border"><?=$i?></div>
            <div class="p-2 border  col-4 "><?= $pro['product_name'] ?></div>
            <div class="p-2 border col-3 border text-center">
                <div class="input-group">
                    <a href="<?=URL?>index.php/home/cartunplus/<?= $pro['id'] ?>" class="input-group-text btn btn-danger"> - </a>
                    <input type="number" value="<?= $pro['quantity'] ?>" class="form-control text-center" min="1" max="100">
                    <a href="<?=URL?>index.php/home/cartplus/<?= $pro['id'] ?>" class="input-group-text btn btn-success"> + </a>
                </div>
            </div>
            <div class="p-2 border col-2 border text-end"><?=number_format($pro["price"]*$pro['quantity'] , 0, '', ',') ?> VNĐ</div>
            <div class="p-2 border flex-grow-1  text-end"><a href="<?=URL?>index.php/home/deleteOneCart/<?= $pro['id'] ?>"  class="btn btn-default ">
                    <i class="bi bi-trash"></i>
                </a></div>
        </div>
        <?php
    $i++;    
    }
}
else {
    echo "<h2 style='text-align:center;margin:1rem 0;'>Giỏ hàng trống</h2>";
}
        ?>
    </div>
    <a >Totalcart <?=number_format($_SESSION['total'], 0, '', ',') ?>VNĐ</a>
    <div class="card-footer text-muted">
        <a href="<?= URL ?>index.php/home/deleteAllCart" class="btn btn-outline-danger">Delete ALL PRO</a>
        <a href="<?= URL ?>index.php/home/thanhtoan" class="btn btn-outline-success">Đặt hàng</a>
    </div>
</div>