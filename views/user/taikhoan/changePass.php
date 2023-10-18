<?php
    if(isset($user)){
        extract($user);
    }
?>
<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Đổi mật khẩu</div>
            <div class=" row formContent formReg ">
                <form action="index.php?act=cfchange" method="post">
                    <label for="pass">Mật khẩu cũ</label>
                    <input type="password" name="oldpass" id="oldpass" placeholder="Mật khẩu">
                    <label for="">Mật khẩu mới</label>
                    <input type="password" name="newpass" id="pass" placeholder="Mật khẩu">
                    <label for="repass">Nhập lại mật khẩu mới</label>
                    <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" class="reg" name="updatepass" value="Đổi mật khẩu">
                    <input type="reset" value="Nhập lại">
                </form>
            </div>
            <span class="spanErr"><?php
                if(isset($_SESSION['err'])){
                    echo $_SESSION['err'];
                    unset($_SESSION['err']);
                }
            
            ?></span>
        </div>
    </div>
            <div class="boxright">
                <?php
                include_once "views/layout/boxRight.php";
                ?>
            </div>

