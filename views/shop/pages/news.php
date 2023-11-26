<?php
// print_r($data["details"]);
$product = $data["news"];
?>
<div class="container p-0 chitietsanpham">
           <h3>Tin Tức/<?= $product["title"] ?></h3>
           <div class="sanpham">
               <div class="mt-3">
                   <img src="<?= URL ?>public/img/news/<?= $product["avatar"] ?>" alt="">
                 
               </div>
               <div class="content mt-3">
                <div class="title">
                    <div href="#" class="title-name h5">
                    <b>
                    <?= $product["title"] ?>
                    </b>    
                </div> 
                </div> 
                <div>
                <?= $product["content"] ?>
                </div>
                
               </div>
           </div>