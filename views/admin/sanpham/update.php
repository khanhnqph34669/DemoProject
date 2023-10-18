<?php
    if(is_array($updateSanPham)){
        extract($updateSanPham);
        
   }
?>

<div class="row">
            <div class="row header formTitle"><h2>Cập nhật loại hàng</h2></div>
        </div>
        <div class="row formContent">
            <form action="index.php?act=confirmUpdate" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <label for="">Mã Sản Phẩm</label><br>
                    <input type="text" name="autonumber" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="row mb10">
                    <label for="">Tên Sản Phẩm</label><br>
                    <input type="text" name="name" id="" value="<?php echo $name?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    </div>
                    <div class="row mb10">

                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" id="" value="<?php echo $price?>">
                    </div>
                    <div class="row mb10">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="img" id="" value="">
                    </div>
                    <div class="row mb10 texta">
                    <label for="">Description</label>
                    <textarea name="des" id="" cols="30" rows="10"><?php echo $des?></textarea>
                    </div>
                    <div class="row mb10 slec">
                    <label for="">Danh mục</label>
                    <select name="danhmuc" id="">
                        <?php
                            foreach($listDanhMuc as $row){
                                extract($row);
                                $selected = ($iddanhmuc == $id) ? "selected" : "";
                                echo '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="update" value="Cập nhật">
                        <input type="reset" value="Reset tên danh mục">
                        <a href="index.php?act=listsanpham"><input type="button" value="Danh sách"></a>
                    </div>
            </form>
        </div>
    </div>
    </body>