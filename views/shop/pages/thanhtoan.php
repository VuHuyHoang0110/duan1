<div class="container">
<form action="<?= URL ?>index.php/home/luudonhang" method="post">

<fieldset class="border m-2 p-3">
   <legend class="small text-primary fw-bold">Thông tin người nhận hàng</legend>
   <div class="form-group row mb-3">
    <label class="col-sm-2 col-form-label">Họ tên</label>
    <div class="col-sm-10"><input type="text" value="<?= $_SESSION['user'] ?>" class="form-control" name="name"></div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="col-sm-10"> <input type="text" class="form-control" name="phone"> </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Địa chỉ</label>
    <div class="col-sm-10"> <input type="text" class="form-control" id="email" name="address"> </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Ghi Chú</label>
    <div class="col-sm-10"> <input type="text" class="form-control" id="email" name="ghichu"> </div>
  </div>
  <div class="m-2 d-flex">
   <fieldset class="border p-3 mr-2 col-6">    
      <legend class="small text-primary fw-bold">Phương thức thanh toán</legend>
      <div class="form-group row">
        <p><input type="radio" name="phuongthuctt" value="ck"> Chuyển khoản</p>
        <p><input type="radio" name="phuongthuctt" value="khinhan"> Khi nhận hàng</p>
        <p><input type="radio" name="phuongthuctt" value="onepay"> Onepay</p>
        <p><input type="radio" name="phuongthuctt" value="nganluong"> Ngân Lượng</p>
      </div>
    </fieldset>
    <fieldset class="border p-3 ml-3 col-6">    
       <legend class="small text-primary fw-bold">Phương thức giao hàng</legend>
       <div class="form-group row">
          <p><input type="radio" name="phuongthuctt" value="ghnhanh"> Giao hàng nhanh</p>
         <p><input type="radio" name="phuongthuctt" value="ghtietkiem"> Giao hàng tiế t kiệm</p>
         <p><input type="radio" name="phuongthuctt" value="vnpost"> VN Post</p>
         <p><input type="radio" name="phuongthuctt" value="viettel"> Viettel</p>
       </div>
    </fieldset>    
</div>
<div class="py-2 m-2 d-flex justify-content-end">  
    <div class="col-2 text-center">
        <button class="btn btn-success" type="submit">Mua hàng</button>
    </div>
</div>
</fieldset>
   
</form>
</div>