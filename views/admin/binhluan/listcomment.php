<?php 

?>
<div class="row">
            <div class="row header formTitle"><h2>Danh sách bình luận</h2></div>
        </div>
        <div class="row formContent">
            <div class="row mb10 list">

            <form action="index.php?act=listsanpham" method="post">
                <input type="text" name="keywords">
                <select name="iddanhmuc" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach($listDanhMuc as $row){
                            extract($row);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="searchlist">
            </form>
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG BÌNH LUẬN</th>
                        <th>USER</th>
                        <th>PRODUCT</th>
                        <th>DATE</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($list_comment as $row){
                            extract($row);
                            $edit = "index.php?act=updatecomment&id=".$id;
                            $delete = "index.php?act=deletecomment&id=".$id;
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$content.'</td>
                                    <td>'.$id_khachhang.'</td>
                                    <td>'.$id_sanpham.'</td>
                                    <td>'.$datecomment.'</td>
                                    <td>
                                        <a href="'.$edit.'"><input type="button" value="Sửa"></a> 
                                        <a href="'.$delete.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                        }
                        
                    ?>
                </table>
                <span><?php 
                if (isset($_SESSION['thongbao'])) {
                $_SESSION['thongbao'] = '<script>
                var popup = document.createElement("div");
                popup.className = "popup";
                popup.innerHTML = "Xóa thành công!";
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
            <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsanpham"><input type="button" value="Thêm mới">  </a>                  
            </div>