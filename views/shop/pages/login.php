<div class="container-fluid">
            <div class="container sign-up banner">
                
                   <div class="form-row text-center"> 
                        <div class="col-6 sign">
                            <a class="btn" href="">ĐĂNG NHẬP</a>
                           
                        </div>
                        <div class="col-6  sign">
                            <a class="btn" href="register">ĐĂNG KÍ</a>
                        </div>
                        <div class=" mt-4 form-group col-12">
                            <form action="<?= URL ?>index.php/home/postLogin" method="post">

                           <h4 class="mb-3 text-danger"> <?php if(isset($data["thongbao"])){echo $data["thongbao"];}  ?> </h4>
                    <input class="email" name="email" type="text" placeholder="Nhập email">
                    <input class="email mt-3" name="password" type="password" placeholder="Mật Khẩu">
                    <span class="require-login text-danger">* Tên đăng nhập hoặc mật khẩu không được để trống</span>
                   
                    <button type="submit" class="btn btn-outline-danger signup mt-3">ĐĂNG NHẬP</button>
                   
                    <a class="mt-3 d-block btn" href="#">QUÊN MẬT KHẨU</a>
                    <div>Hoặc đăng nhập với</div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn fb" >Đăng nhập facebook</button>
                        </div>
                        <div class="col-6">
                            <button class="btn fb" >Đăng nhập goole</button>

                        </div>
                    </div>
                    </form>
                </div>
                </div>
               
            </div>
        </div>