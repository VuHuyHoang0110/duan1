<?php
require("public/function/function.php");

?>

<div class="h3 mb-5">Sản phẩm</div>
<div class="row">
    <div class="col-10 row">
        <?php
        if (count($data["product_cate"])==0){
            echo "<div class='h1 text-warning'>Không có sản phẩm vui lòng chọn danh mục khác</div>";
        }
        
        else
        {

        
        foreach ($data["product_ed"] as $value) {
            echo "<div class='col-lg-4 col-md-6 col-sm-6 col-6 mt-3'>";
            echo "<div class='card product p-2' styte='width:auto'>";
            echo "<a href='".URL."index.php/home/details/".$value["id"]."'><img class='proo card-img-top' src='".URL."public/img/" . $value["image"] . "' alt='" . $value["image"] . "'></a>";
            echo "<div class='card-title product-title text-center h5'><a href='".URL."index.php/home/details/".$value["id"]."' class='proo'>" . $value["product_name"] . "</a></div>";
            // print_r($value['image']);
            echo "<div class='price text-center h6'>" . number_format($value["price"], 0, '', ',') . " VNĐ</div>";
            echo "<span class='text-center add-to-cart add-cart btn btn-outline-warning' onclick='tks()'>";
            echo "<a href='".URL."index.php/home/addcart/".$value["id"]."'>";
            echo "<i class='fas fa-cart-plus'></i>";
            echo " </a>";
            echo " </span>";
            echo "</div>";
            echo " </div>";
        }
    }
    
        ?>
    
</div>

    <div class="col-2 menu-right">
        <?php $this->view("shop/modules/sidebar",$data); ?>

    </div>

</div>
<?php 
if (count($data["product_ed"])>0)
{


?>
<?= $data['paginator'] ?> 

<?php 
}
?>

</div>