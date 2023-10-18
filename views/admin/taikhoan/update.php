<?php
    if(isset($update)){
        extract($update);
    }
?>

<div class="row">
            <div class="row header formTitle"><h2>Cập nhật người dùng</h2></div>
        </div>
        <div class="row formContent">
            <form action="index.php?act=confirmUpdateUser" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <label for="">Mã người dùng</label>
                    <input type="text" name="id_user" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="row mb10">
                        <label for="">Ảnh</label>
                        <input type="file" name="images" id="" value="">
                    </div>
                    <div class="row mb10">
                    <label for="">Tên người dùng</label>
                    <input type="text" name="name" id="" value="<?php echo $name?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" value="<?php echo $email?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="passwords" id="" value="<?php echo $passwords?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" id="" value="<?php echo $address?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="phone" id="" value="<?php echo $phone?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Quyền</label>
                    <select name="roles" id="">
                        <?php
                            foreach($listRoles as $row){
                                $selected = ($update['roles'] == $row['id']) ? "selected" : "";
                                echo '<option name="roles" value="'.$row['id'].'" '.$selected.'>'.$row['name_roles'].'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="updateuser" value="Cập nhật">
                        <input type="reset" value="Reset tên danh mục">
                        <a href="index.php?act=user"><input type="button" value="Danh sách"></a>
                    </div>
            </form>
        </div>
        
    </div>
    </body>