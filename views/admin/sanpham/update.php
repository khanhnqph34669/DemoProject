<?php
   if(isset($update)){
        extract($update);
   }
?>

<div class="row">
            <div class="row header formTitle"><h2>Cập nhật loại hàng</h2></div>
        </div>
        <div class="row formContent">
            <form action="index.php?act=update" method="post">
                <div class="row mb10">
                    <label for="">Mã loại</label><br>
                    <input type="text" name="autonumber" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="row mb10">
                    <label for="">Tên loại</label><br>
                    <input type="text" name="name" id="" value="<?php echo $name?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="update" value="Cập nhật">
                        <input type="reset" value="Reset tên danh mục">
                        <a href="index.php?act=listdanhmuc"><input type="button" value="Danh sách"></a>
                    </div>
            </form>
        </div>
        <span><?php 
                if (isset($_SESSION['thongbao'])) {
                $_SESSION['thongbao'] = '<script>
                var popup = document.createElement("div");
                popup.className = "popup";
                popup.innerHTML = "Cập nhật thành công, Bấm vào danh sách để xem!";
                document.body.appendChild(popup);
                setTimeout(function() {
                    popup.classList.add("show");
                    setTimeout(function() {
                        popup.classList.remove("show");
                        document.body.removeChild(popup);
                    }, 1000); // 5 giây
                }, 1000);
                </script>';
                echo $_SESSION['thongbao'];
                unset($_SESSION['thongbao']);// Xóa thông báo sau khi hiển thị
            }
            
                    ?></span>
    </div>
    </body>