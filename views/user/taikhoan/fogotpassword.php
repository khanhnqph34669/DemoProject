<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Quên mật khẩu</div>
            <div class=" row formContent formReg">
                <form action="index.php?act=cf_fogotpass" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="submit" class="reg" name="register" value="Nhận lại mật khẩu">
                </form>
                <br>
                <span class="spanErr"><?php
                        if(isset($thongbao)){
                            echo $thongbao;
                        }
                    ?></span>
            </div>
        </div>
    </div>
            <div class="boxright">
                <?php
                include_once "views/layout/boxRight.php";
                ?>
            </div>

