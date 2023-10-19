<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Đăng Ký Thành Viên</div>
            <div class=" row formContent formReg ">
                <form action="index.php?act=cfregister2" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Họ và tên" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Mật khẩu" required>
                    <label for="repass">Re-Password</label>
                    <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu" required>
                    <input type="submit" class="reg" name="register" value="Thêm người dùng">
                    <input type="reset" value="Nhập lại">
                    <button><a href="index.php?act=user">Danh sách</a></button>
                </form>
            </div>
        </div>
    </div>

