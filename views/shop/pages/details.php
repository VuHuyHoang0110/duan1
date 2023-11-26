<?php
// print_r($data["details"]);
$product = $data["details"];
?>
<div class="container p-0 chitietsanpham">
           <h3>Sản phẩm/<?= $product["product_name"] ?></h3>
           <div class="sanpham">
               <div class="hinhanh mt-3">
                   <img src="<?= URL ?>public/img/<?= $product["image"] ?>" alt="">
                   <div class="mt-4 mb-4"><?=$product["product_detail"]; ?></div>
               </div>
               <div class="content mt-3">
                <div class="title">
                    <div href="#" class="title-name h5"><?= $product["product_name"] ?></div> 
                   <div class="title-ma">Mã sản phẩm:<b><?= $product["id"] ?></b> </div> 
                   <div class="title-trangthai">Còn hàng</div> 
                </div> 
                <div class="price"><?= number_format($product["price"], 0, '', ',') ?> VNĐ</div>
                <a href="<?=URL?>index.php/home/addcart/<?=$product["id"]?> " class="btn btn-primary themhang">Thêm vào giỏ</a>

                <div class="content-footer">
                    <div class="giaohang">
                        <div><i class="fas fa-truck"></i></div>
                        <div class="giaohang-content">
                            <h4>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</h4>
                        <p>(Sản phẩm trên 300,000đ)</p>
                        </div>
                        
                    </div>
                    <div class="giaohang">
                        <div><i class="fas fa-file-invoice"></i></div>
                        <div class="giaohang-content">
                            <h4>ĐỔI TRẢ DỄ DÀNG</h4>
                            <p>(Đổi trả 24h cho tất cả sản phẩm đầy đủ tem mác)</p>
                        </div>
                        
                    </div>
                    <div class="giaohang">
                        <div><i class="fas fa-phone-alt"></i></div>
                        <div class="giaohang-content">
                            <h4>TỔNG ĐÀI BÁN HÀNG 1800 1162</h4>
                            <p>(Miễn phí từ 8h30 - 21:30 mỗi ngày)</p>
                        </div>           
                    </div>
                </div>
               </div>
           </div>