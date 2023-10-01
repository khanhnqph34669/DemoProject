<?php
include_once '../layoutAdmin/header.php';
require_once "../../model/danhmucController.php";


if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'danhmuc':
            include_once '../admin/danhmuc/add.php';
            break;
        case 'adddanhmuc':
            $thongbao = addDanhMuc($_POST['name']);
            include_once '../admin/danhmuc/add.php';
            break;
        case 'editdanhmuc':
            $list = getAll();
            include_once '../admin/danhmuc/list.php';
            break;
        case 'deletedanhmuc':
            $del = deleteDanhMuc($_GET['id']);
            $thongbao = $del;
            $list = getAll();
            include_once '../admin/danhmuc/list.php';
            break;
        case 'updatedanhmuc':
            $id = $_GET['id'];
            $update = getOne($id);
            include_once '../admin/danhmuc/update.php';
            break;
        case 'update':
            $id = $_POST['id'];
            $thongbao = updateDanhMuc($id);
            $update = getOne($id);
            include_once '../admin/danhmuc/update.php';
            break;
        case 'hanghoa':
            include_once 'sanpham/add.php';
            break;
        case 'user':
            include_once 'user.php';
            break;
        case 'comment':
            include_once 'comment.php';
            break;
        case 'thongke':
            include_once 'thongke.php';
            break;
        default:
            include_once 'home.php';
            break;
    }
}
else{
    include_once 'home.php';
}



include_once '../layoutAdmin/footer.php';