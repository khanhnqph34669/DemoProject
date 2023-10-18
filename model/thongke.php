<?php
function load_all_thongke(){
    
    $sql = "SELECT danhmuc.name as name, COUNT(sanpham.id) as soluong, MAX(sanpham.price) as max, MIN(sanpham.price) as min, AVG(sanpham.price) as avg FROM sanpham INNER JOIN danhmuc ON sanpham.iddanhmuc = danhmuc.id GROUP BY danhmuc.name";
    $result = query($sql);
    return $result;
}
?>