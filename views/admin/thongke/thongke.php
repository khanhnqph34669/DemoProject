<?php 

?>
<div class="row">
            <div class="row header formTitle"><h2>Thống kê sản phẩm theo loại</h2></div>
        </div>
        <div class="row formContent">
            <div class="row mb10 list">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php 
                    $i=1;
                    foreach ($list_thongke as $row) {
                        extract($row);
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$name.'</td>
                                <td>'.$soluong.'</td>
                                <td>'.$max.'</td>
                                <td>'.$min.'</td>
                                <td>'.$avg.'</td>
                            </tr>';
                        $i++;
                    }
                        
                    ?>
                </table>
            </div>
            <div class="row mb10">
                    <a href="index.php?act=chart"><input type="button" value="Xem biểu đồ">  </a>                  
            </div>  