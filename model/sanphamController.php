<?php

require_once "connect.php";

function getAllSanPham(){
    $sql = "SELECT * FROM sanpham";
    $result = query($sql);
    return $result;
}
function getOneSanPham($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    $result = query_one($sql,['id'=>$id]);
    return $result;
    
}
function addSanPham($name,$price,$des,$img,$danhmuc){
    if(empty($name)){
        $thongbao = "Không được để trống tên danh mục";
        return $thongbao;
    }
    else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $des = $_POST['des'];
        $danhmuc = $_POST['danhmuc'];
        $img = $_FILES['img']['name'];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $sql = "INSERT INTO sanpham(name,price,des,img,iddanhmuc) VALUES('$name','$price','$des','$img','$danhmuc')";
        execute($sql);
        $thongbao = "Thêm mới thành công";
        return $thongbao;
    }
}
function updateSanPham($id){
    $name = $_POST['name'];
    if(empty($name)){
        $thongbao = "Không được để trống tên danh mục";
        return $thongbao;
    }
    else{
        $sql = "UPDATE danhmuc SET name='$name' WHERE id=$id";
    execute($sql);
    $thongbao = "Cập nhật thành công";
    return $thongbao;
    }
}
function deleteSanPham($id){
    $sql = "DELETE FROM danhmuc WHERE id=$id";
    execute($sql);
    $_SESSION['thongbao'] = "";
    return $_SESSION['thongbao'];
    
}

function getSanPhamByDanhMuc($id,$keywords){
    if($id==0){
        $sql = "SELECT * FROM sanpham WHERE name LIKE '%$keywords%'";
    }
    else{
        $sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id AND name LIKE '%$keywords%'";
    }
    $result = query($sql);
    return $result;
}
?>