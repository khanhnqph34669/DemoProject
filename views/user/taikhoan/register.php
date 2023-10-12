<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Đăng Ký Thành Viên</div>
            <div class=" row formContent formReg ">
                <form action="index.php?act=cfregister" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Họ và tên">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Mật khẩu">
                    <label for="repass">Re-Password</label>
                    <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu">
                    <input type="submit" class="reg" name="register" value="Đăng ký">
                    <input type="reset" value="Nhập lại">
                </form>
            </div>
        </div>
    </div>
            <div class="boxright">
                <?php
                include_once "views/layout/boxRight.php";
                ?>
            </div>

