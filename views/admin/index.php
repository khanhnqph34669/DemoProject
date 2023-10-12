<?php
session_start();
include_once '../layoutAdmin/header.php';
require_once "../../model/danhmuc.php";
require_once "../../model/sanpham.php";
require_once "../../model/check_session.php";
require_once "../../model/comment.php";
require_once "../../model/account.php";


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
        case 'listdanhmuc':
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
            $list = getAll();
            include_once '../admin/danhmuc/list.php';
            break;
        case 'hanghoa':
            include_once 'sanpham/add.php';
            break;
        case 'listsanpham':
            if(isset($_POST['searchlist'])){
                $keywords = $_POST['keywords'];
                $iddanhmuc = $_POST['iddanhmuc'];
                $listSanPham = getSanPhamByDanhMuc($iddanhmuc,$keywords);
                $listDanhMuc = getAll();
                include_once 'sanpham/list.php';
                break;
            }
            $listSanPham = getAllSanPham();
            $listDanhMuc = getAll();
            include_once 'sanpham/list.php';
            break;
        case 'addsanpham':
            if(isset($_POST['submitbtn'])){
                $thongbao = addSanPham($_POST['name'],$_POST['price'],$_POST['des'],$_FILES['img']['name'],$_POST['danhmuc']);
            }
            include_once 'sanpham/add.php';
            break;
        case 'deletesanpham':
            $del = deleteSanPham($_GET['id']);
            $thongbao = $del;
            $listSanPham = getAllSanPham();
            $listDanhMuc = getAll();
            include_once 'sanpham/list.php';
            break;
        case 'updatesanpham':
            $id = $_GET['id'];
            $updateSanPham = getOneSanPham($id);
            $listDanhMuc = getAll();
            include_once '../admin/sanpham/update.php';
            break;
        case 'confirmUpdate':
            if(isset($_POST['update'])){
                $id = $_POST['id'];
            $thongbao = updateSanPham($id);
            $updateSanPham = getOneSanPham($id);
            $listDanhMuc = getAll();
            }
            $listSanPham = getAllSanPham();
            include_once '../admin/sanpham/list.php';
            break;
        case 'user':
            $list_user = get_info_user_all();
            include_once 'taikhoan/list.php';
            break;
        case 'comment':
            $list_comment = load_all_comment();
            include_once 'binhluan/listcomment.php';
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