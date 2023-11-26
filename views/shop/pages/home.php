<?php
require("public/function/function.php");
?>

<div class="h3 mb-5">Sản phẩm Mới</div>
<div class="row" id="banchay">
    <div class="col-10 row">
        <?php
        foreach ($data["new_products"] as $value) {
            echo "<div class='col-lg-4 col-md-6 col-sm-6 col-6 mt-3'>";
            echo "<div class='card product p-2' styte='width:auto'>";
            echo "<a href='".URL."index.php/home/details/".$value["id"]."'><img class='proo card-img-top' src='".URL."public/img/" . $value["image"] . "' alt='" . $value["image"] . "'></a>";
            echo "<div class='card-title product-title text-center h5'><a href='".URL."index.php/home/details/".$value["id"]."' class='proo'>" . $value["product_name"] . "</a></div>";
            // print_r($value['image']);
            echo "<div class='price text-center h6'>" . number_format($value["price"], 0, '', ',') . " VNĐ</div>";
            echo "<span class='text-center add-to-cart add-cart btn btn-outline-warning' onclick='tks()'>";
            echo "'<a href='".URL."index.php/home/addcart/".$value["id"]."'>";
            echo "<i class='fas fa-cart-plus'></i>";
            echo " </a>";
            echo " </span>";
            echo "</div>";
            echo " </div>";
        }
        // print_r($data["new_products"]);
        ?>
    </div>
    <div class="col-2 menu-right">
        <?php $this->view("shop/modules/sidebar",$data); ?>

    </div>

</div>
<div class="h3 mt-5">Sản phẩm Giảm giá</div>
<div class="row" id="banchay">
    <div class="col-12 row">
        <?php
        $t = "";
        foreach ($data["sale_products"] as $value) {
            echo "<div class='col-lg-3 col-md-6 col-sm-6 col-6 mt-3'>";
            echo "<div class='card product p-2' styte='width:auto'>";
            echo "<a href='".URL."index.php/home/details/".$value["id"]."'><img class='proo card-img-top' src='".URL."public/img/" . $value["image"] . "' alt='" . $value["image"] . "'></a>";
            echo "<div class='card-title product-title text-center h5'><a href='".URL."index.php/home/details/".$value["id"]."' class='proo'>" . $value["product_name"] . "</a></div>";
            // print_r($value['image']);
            echo "<div class='price text-center h6'>" . number_format($value["price"], 0, '', ',') . " VNĐ</div>";
            echo "<span class='text-center add-to-cart add-cart btn btn-outline-warning' onclick='tks()'>";
            echo "'<a href='".URL."index.php/home/addcart/".$value["id"]."'>";
            echo "<i class='fas fa-cart-plus'></i>";
            echo " </a>";
            echo " </span>";
            echo "</div>";
            echo " </div>";
        }
        // print_r($data["new_products"]);
        ?>
    </div>


</div>
<div class="h3 text-center mt-5">TIN TỨC</div>
<div class="row">
    <div class="col-12 row">
        <?php
        foreach ($data["news_list"] as $value) {
            echo "<div class='col-lg-4 col-md-6 col-sm-6 col-6 mt-3'>";
            echo "<div class='card product p-2' styte='width:auto'>";
            echo "<a href='".URL."index.php/home/details_news/".$value["id"]."'><img class='proo card-img-top' src='".URL."public/img/news/" . $value["avatar"] . "' alt='" . $value["avatar"] . "'></a>";
            echo "<div class='card-title product-title text-center h5'><a href='".URL."index.php/home/details_news/".$value["id"]."' class='proo'>" . $value["title"] . "</a></div>";
            // print_r($value['image']);
            echo "<div class='price text-center h6'>".$value["short_description"]."</div>";
            echo "</div>";
            echo " </div>";
        }
        // print_r($data["new_products"]);
        ?>
    </div>


</div>
</div>