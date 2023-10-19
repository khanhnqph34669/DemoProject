<?php
session_start();
include_once '../layoutAdmin/header.php';
require_once "../../model/danhmuc.php";
require_once "../../model/sanpham.php";
require_once "../../model/check_session.php";
require_once "../../model/comment.php";
require_once "../../model/account.php";
require_once "../../model/thongke.php";

$roles = $_SESSION['user']['roles'];
 checkSession($roles);



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
        case 'addtaikhoan':
            $listRoles = get_roles_all();
            include_once 'taikhoan/add.php';
            break;
        case 'cfregister2':
            $thongbao = register($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['repass']);
            header('location: index.php?act=user');
            break;
        case 'updatetaikhoan':
            $id = $_GET['id'];
            $update = getOneUser($id);
            $listRoles = get_roles_all();
            include_once 'taikhoan/update.php';
            break;
        case 'confirmUpdateUser':
            $update = update_info_user($_POST['id_user'],$_FILES['images']['name'],$_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['passwords'],$_POST['roles']);
            $list_user = get_info_user_all();
            include_once 'taikhoan/list.php';
            break;
        case 'deletetaikhoan':
            $del = delete_user($_GET['id']);
            $list_user = get_info_user_all();
            include_once 'taikhoan/list.php';
            break;
        case 'deletecomment':
            $del = delete_comment($_GET['id']);
            $list_comment = load_all_comment();
            include_once 'binhluan/listcomment.php';
            break;
        case 'thongke':
            $list_thongke = load_all_thongke();
            include_once 'thongke/thongke.php';
            break;
        case 'chart':
            include_once 'thongke/bieudo.php';
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