<div class="row">
    <div class="row header formTitle">
        <h2>Danh sách bình luận</h2>
    </div>
</div>
<div class="row formContent">
    <div class="row mb10 list">

        <form action="index.php?act=listcomment" method="post">
            <input type="text" name="keywords">
            <select name="iddanhmuc" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listDanhMuc as $row) {
                    extract($row);
                    echo '<option value="' . $id . '">' . $name . '</option>';
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
                <th>ID_USER</th>
                <th>PRODUCT</th>
                <th>DATE</th>
                <th></th>
            </tr>
            <?php
            foreach ($list_comment as $row) {
                extract($row);
                $delete = "index.php?act=deletecomment&id=" . $id;
                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id . '</td>
                                    <td>' . $content . '</td>
                                    <td>' . $id_khachhang. '</td>
                                    <td>' . $id_sanpham . '</td>
                                    <td>' . $datecomment . '</td>
                                    <td>
                                        <a href="' . $delete . '"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
            }

            ?>
        </table>
    </div>
    <div class="row mb10">
       
    </div>