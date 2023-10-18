<div class="row mb">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Cập Nhật Thông Tin Thành Viên</div>
            <div class="row formContent ">
                <form action="index.php?act=updateinfo" method="post" enctype="multipart/form-data">
                <?php
                if (isset($info) && is_array($info)) {
                    extract($info);
                }
                echo '<label for="name">Ảnh đại diện</label>';
                echo '<img class="avtp" src="views/images/' . $images . '" alt="images">';
                if($roles == 0){
                    echo  '<img class="tichxanh2" src="views/images/tichxanh.png" alt="images">';
                }
                echo '<input type="text" name="id_user" id="name" value="' . $_GET['id']. '"hidden>';
                echo '<br>';
                echo '<label>Ảnh thay thế</label>';
                echo '<br>';
                echo '<input type="file" name="images"  id="images" value="' . $images . '">';
                echo '<br>';
                echo '<label for="name">Họ và tên</label>';
                echo '<input type="text" name="name" id="name" value="' . $name . '">';
                echo '<label for="email">Email</label> <br>';
                echo '<input type="email" name="email" id="email" value="' . $email . '">';
                echo '<label for="address">Địa chỉ</label> <br>';
                echo '<input type="text" name="address" id="address" value="' . $address . '">';
                echo '<label for="phone">Số điện thoại</label> <br>';
                echo '<input type="number" name="phone" id="phone" value="' . $phone . '">';
                echo '<br>';
                ?>
                <button type="submit" name="updateinfo">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php
        include_once "views/layout/boxRight.php";
        ?>
    </div>
</div>
