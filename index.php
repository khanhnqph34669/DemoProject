<?php
include_once "model/connect.php";
include_once "model/sanpham.php"; 
include_once "model/danhmuc.php"; 
include_once "views/layout/header.php";
include_once "global.php";

    $sanphamnew = getAllSanPham_home();
    $listdanhmuc = getAll();


    if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include_once "views/user/about.php";
            break;
        default:
            include_once "views/user/home.php";
            break;
    } 
    }
    else {
    include_once "views/user/home.php";
    }   

include_once "views/layout/footer.php";

?>