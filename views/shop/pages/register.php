<div class="container-fluid">
            <div class="container sign-up">
                <form action="<?= URL ?>index.php/home/postRegister" method="post">
                   <div class="form-row text-center"> 
                        <div class="col-6 sign">
                            <a class="btn " href="login">ĐĂNG NHẬP</a>
                        </div>
                        <div class="col-6  sign">
                            <a class="btn" href="#">ĐĂNG KÍ</a>
                        </div>
                        <div class=" mt-4 form-group col-12">
                    <input class="email" type="text" name="name" placeholder="Họ và tên">
                    <input class="email mt-3" type="email" name="email" placeholder="Email">
                    <input class="email mt-3" type="password" name="password" placeholder="Mật Khẩu">
                    <input class="email mt-3" type="number" name="phone" placeholder="Số điện thoại">
                    <input class="email mt-3" type="text" name="address" placeholder="Địa chỉ">
                    <span class="require-login text-danger">* Các thông tin không được để trống</span>
                    <button class="btn btn-dark mt-3" type="submit">ĐĂNG KÍ</button>
                </div>
                </div>
                </form>
            </div>
        </div>