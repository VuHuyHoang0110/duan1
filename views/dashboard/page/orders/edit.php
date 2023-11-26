<?php
$p = $data['edit'];
?>
<form action="<?= URL ?>index.php/admin/posteditorder/<?= $p['id'] ?>" enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label>Khách hàng</label>
    <input type="text" value="<?= $p['name'] ?>" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
 
  <div class="form-group">
    <label>Số điện thoại</label>
    <input type="text" value="<?= $p['phone'] ?>" name="phone" class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" value="<?= $p['address'] ?>" name="address" class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label>Ghi Chú</label>
    <input type="text" value="<?= $p['ghichu'] ?>" name="ghichu" disabled class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label>Tổng đơn</label>
    <input type="text" value="<?= $p['total'] ?>" name="product_name" disabled class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label>Ngày đặt hàng</label>
    <input type="text" value="<?=  $p['order_date'] ?>" name="product_name" disabled class="form-control" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label>Status</label>
    <select class="form-control" name="status">
    <?php 
      if ($p['delivered'] == 0 || $p['delivered'] =="" ){
        echo "<option  value='1'>Đã giao hàng</option><option selected value='0'>Chưa giao hàng</option>";
      }
      else {
        echo "<option selected value='1'>Đã giao hàng</option><option  value='0'>Chưa giao hàng</option>";
      }
    ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>