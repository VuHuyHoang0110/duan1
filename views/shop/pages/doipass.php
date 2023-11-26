
<div class="row">
                <div class="col-3 text-center bg-light">
                    <div class="text-danger ">
                        TÀI KHOẢN
                    </div>
                    <img class="mt-3" src="<?= URL?>public/img/avt.png" alt="" style="width: 100px;">
                    <div id="thanh2" class="mt-2">
                    </div>
                    <div id="doimk"><a href="" class="btn btn-danger">Đổi Mật Khẩu</a></div>
                    <div id="doimk"><a href="" class="btn btn-outline-danger mt-1">Xem đơn hàng</a></div>
                    <a class="btn" href="<?= URL?>index.php/home/logout" ><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                   
                </div>
                <div class="clearfix"></div>
                <div class="col-9">
                    <div>Đổi PASSWORD</div>
                    <form action="<?= URL?>index.php/home/postchangepass" method="post">
                   
                    <div class="mt-5">
                        <div class="">
                            <div class="col-6 form-group">
                                <label for="">Mật khẩu cũ</label>
                                <input class="form-control mt-1" name="password" type="password"  placeholder="">

                            </div>
                            <div class="col-6 form-group">
                                <label for="">Mật khẩu mới</label>
                                <input class="form-control mt-1" name="newpassword" type="password" placeholder="">

                            </div>
                            <div class="col-6 form-group">
                                <label for="">Nhập lại mật khẩu</label>
                                <input class="form-control mt-1" name="passwordagain" type="password" placeholder="">
                                <h1 class="mb-3 mt-3 text-danger"> <?php if(isset($data["thongbao"])){echo $data["thongbao"];}  ?> </h1>
                            </div>
                                <button type="submit" class="btn btn-warning ml-3">Đổi</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>