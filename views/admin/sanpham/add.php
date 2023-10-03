<?php
require_once "../../model/sanphamController.php";
require_once "../../model/danhmucController.php";
$listDanhMuc = getAll();
extract($listDanhMuc);
?>

<div class="row">
            <div class="row header formTitle"><h2>Thêm mới loại hàng</h2></div>
        </div>
        <div class="row formContent">
            <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <label for="">Mã sản phẩm</label><br>
                    <input type="text" name="autonumber" disabled value="Auto number" readonly>
                    </div>
                    <div class="row mb10">
                    <label for="">Tên sản phẩm</label><br>
                    <input type="text" name="name" id="">
                    </div>
                    <div class="row mb10">
                    <label for="">Giá sản phẩm</label><br>
                    <input type="number" name="price" id="">
                    </div>
                    <div class="row mb10">
                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name="img" id="">
                    </div>
                    <div class="row mb10 texta">
                    <label for="">Mô tả sản phẩm</label><br>
                    <textarea name="des" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10 slec">
                    <label for="danhmuc">Danh mục</label><br>
                    
                    <select name="danhmuc" id="danhmuc">
                        <?php
                            foreach($listDanhMuc as $row){
                                extract($row);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="submitbtn" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsanpham"><input type="button" value="Danh sách"></a>
                    </div>
            </form>
        </div>
        <span><?php if(isset($thongbao)) echo $thongbao; ?></span>
    </div>
    </body>