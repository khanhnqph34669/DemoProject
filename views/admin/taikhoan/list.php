<?php 

?>
<div class="row">
            <div class="row header formTitle"><h2>Danh sách khách hàng</h2></div>
        </div>
        <div class="row formContent">
            <div class="row mb10 list">
            </form>
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN TÀI KHOẢN</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SDT</th>
                        <th>QUYỀN</th>
                        <th></th>
                    </tr>
                    <?php 
                       foreach($list_user as $row){
                            extract($row);
                            $edit = "index.php?act=updatetaikhoan&id=".$id;
                            $delete = "index.php?act=deletetaikhoan&id=".$id;
                            $roles = get_name_roles($roles);
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$passwords.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$roles['name_roles'].'</td>
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
                unset($_SESSION['thongbao']);
            }
            
                    ?></span>
            </div>
            <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addtaikhoan"><input type="button" value="Thêm mới">  </a>                  
            </div>
        </div>

<?php
    
?>