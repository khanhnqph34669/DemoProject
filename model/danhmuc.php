<?php

require_once "connect.php";

function getAll(){
    $sql = "SELECT * FROM danhmuc ORDER BY name ASC";
    $result = query($sql);
    return $result;
}
function getOne($id){
    $sql = "SELECT * FROM danhmuc WHERE id=$id";
    $result = query_one($sql);
    return $result;
    
}
function addDanhMuc($name){
    if(empty($name)){
        $thongbao = "Không được để trống tên danh mục";
        return $thongbao;
    }
    else{
        $sql = "INSERT INTO danhmuc(name) VALUES('$name')";
    execute($sql);
    $thongbao = "Thêm mới thành công";
    return $thongbao;
    }
}
function updateDanhMuc($id){
    $name = $_POST['name'];
    if(empty($name)){
        $_SESSION['thongbao'] = "Không được để trống tên danh mục";
        return $_SESSION['thongbao'];
    }
    else{
        $sql = "UPDATE danhmuc SET name='$name' WHERE id=$id";
    execute($sql);
    $_SESSION['thongbao'] = "Cập nhật thành công";
    return $_SESSION['thongbao'];
    }
}
function deleteDanhMuc($id){
   $result = kiemTraSanPham($id);
    if($result == true){
         $sql = "DELETE FROM danhmuc WHERE id=$id";
         execute($sql);
         $_SESSION['thongbao'] = "Xóa thành công";
         return $_SESSION['thongbao'];
    }
    else{
        $_SESSION['thongbao'] = "Không thể xoá danh mục này, vì danh mục còn sản phẩm";
        return $_SESSION['thongbao'];
    }
}


function kiemTraSanPham($id){
    $sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id";
    $result = query($sql);
    if(count($result) > 0){
        return false;
    }
    else{
        return true;
    }
}
?>