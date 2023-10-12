<?php
session_start();
include_once "model/connect.php";
include_once "model/sanpham.php"; 
include_once "model/danhmuc.php"; 
include_once "model/comment.php";
include_once "model/account.php";
include_once "views/layout/header.php";
include_once "global.php";

    $sanphamnew = getAllSanPham_home();
    $listdanhmuc = getAll();
    $sanphamtop = getAllSanPham_top();
    


    if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include_once "views/user/about.php";
            break;
        case 'chitietsanpham':
            $id = $_GET['id'];
            $detail = getOneSanPham($id);
            $iddanhmuc = $detail['iddanhmuc'];
            $cungloai = getOneSanPham_cungloai($id,$iddanhmuc);
            include_once "views/user/detailProduct.php";
            break;
        case 'search':
            $keywords = $_POST['keywords'];
            $timkiem = getSanPhamByKeywords($keywords);
            include_once "views/user/search.php";
            break;
        case 'danhmuc':
            $iddm = $_GET['id'];
            $danhmuc = getOne($iddm);
            $listSanPham = getAllSanPham_danhmuc($iddm);
            include_once "views/user/product.php";
            break;
        case 'sigin':
            if(isset($_POST['dangnhap'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $check = check_user($email,$password);
                if(is_array($check)){
                    $_SESSION['user'] = $check;
                    header("location:index.php");
                }
                else{
                    $thongbao = "Đăng nhập thất bại";
                }
            }
            include_once "views/user/home.php";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("location:index.php");
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
