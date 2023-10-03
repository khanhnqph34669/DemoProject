<div class="row">
            <div class="row header formTitle"><h2>Danh sách sản phẩm</h2></div>
        </div>
        <div class="row formContent">
            <div class="row mb10 list">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>HÌNH SẢN PHẨM</th>
                        <th>lƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php 
                        
                        foreach($listSanPham as $row){
                            extract($row);
                            
                            $edit = "index.php?act=updatesanpham&id=".$id;
                            $delete = "index.php?act=deletesanpham&id=".$id;

                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$price.'</td>
                                    <td><img src="../../images/'.$img.'" alt=""></td>
                                    <td>'.$traffic.'</td>
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