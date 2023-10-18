<?php

require_once "connect.php";

function getAllSanPham()
{
    $sql = "SELECT * FROM sanpham";
    $result = query($sql);
    return $result;
}
function getAllSanPham_danhmuc($id)
{
    $sql = "SELECT * FROM sanpham where iddanhmuc=$id";
    $result = query($sql);
    return $result;
}
function getAllSanPham_home()
{
    $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,9";
    $result = query($sql);
    return $result;
}
function getAllSanPham_top()
{
    $sql = "SELECT * FROM sanpham where 1 order by traffic desc limit 0,10";
    $result = query($sql);
    return $result;
}

function getOneSanPham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=$id";
    $result = query_one($sql);
    return $result;
}

function getOneSanPham_cungloai($id, $iddanhmuc)
{
    $sql = "SELECT * FROM sanpham WHERE iddanhmuc=" . $iddanhmuc . " AND id<>$id";
    $result = query($sql);
    return $result;
}
function addSanPham($name, $price, $des, $img, $danhmuc)
{
    if (empty($name) || empty($price) || empty($des) || empty($img) || empty($danhmuc)) {
        $thongbao = "Không được để trống trường dữ liệu nào cả";
        return $thongbao;
    } else {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $des = $_POST['des'];
        $danhmuc = $_POST['danhmuc'];
        $img = $_FILES['img']['name'];
        $target_dir = "../../views/images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $sql = "INSERT INTO sanpham(name,price,des,img,iddanhmuc) VALUES('$name','$price','$des','$img','$danhmuc')";
        execute($sql);
        $thongbao = "Thêm mới thành công";
        return $thongbao;
    }
}
function updateSanPham($id)
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $des = $_POST['des'];
    $danhmuc = $_POST['danhmuc'];
    $img = $_FILES['img']['name'];
    $target_dir = "../../views/images/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    if (empty($img)) {
        $sql = "UPDATE sanpham SET name='$name',price='$price',des='$des',iddanhmuc='$danhmuc' WHERE id=$id";
        execute($sql);
    } else {
        $sql = "UPDATE sanpham SET name='$name',price='$price',des='$des',img='$img',iddanhmuc='$danhmuc' WHERE id=$id";
        execute($sql);
    }
    $_SESSION['thongbaou'] = "Cập nhật thành công";

    return $_SESSION['thongbaou'];
}
function deleteSanPham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=$id";
    execute($sql);
    $_SESSION['thongbao'] = "";
    return $_SESSION['thongbao'];
}

function getSanPhamByDanhMuc($id, $keywords)
{
    if ($id == 0) {
        $sql = "SELECT * FROM sanpham WHERE name LIKE '%$keywords%'";
    } else {
        $sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id AND name LIKE '%$keywords%'";
    }
    $result = query($sql);
    return $result;
}

function getSanPhamByKeywords($keywords)
{
    $sql = "SELECT * FROM sanpham WHERE name LIKE '%$keywords%'";
    $result = query($sql);
    return $result;
}
