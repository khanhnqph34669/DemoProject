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
    
   if(isset($_SESSION['thongbao'])){
        echo $_SESSION['thongbao'];
        unset($_SESSION['thongbao']);
    }
    

    if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include_once "views/user/about.php";
            break;
        case 'lienhe':
            include_once "views/user/lienhe.php";
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
        case 'bl':
            $id_user = $_POST['iduser'];
            $idsp = $_GET['id'];
            $bl = insert_comment($id_user,$_POST['noidung'],$idsp,$_POST['date']);
            header("location:index.php?act=chitietsanpham&id=$idsp") ;
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("location:index.php");
            break;
        case 'register':
            include_once "views/user/taikhoan/register.php";
            break;
        case 'cfregister':
            $nof = register($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['repass']);
            include_once "views/user/home.php";
            break;
        case 'admin':
           //Nếu có roles = 0 thì mới được vào trang admin
            if(isset($_SESSION['user'])){
                $roles = $_SESSION['user']['roles'];
                if($roles == 0){
                    header("location:views/admin/index.php");
                }
                else{
                    header("location:index.php");
                }
            }
            else{
                include_once "views/user/home.php";
            }
            break;
        case 'update_profile':
            $info = get_info_user($_GET['id']);
            $roles2 = get_name_roles($_GET['id']);
            include_once "views/user/taikhoan/update.php";
            break;
        case 'updateinfo':
            $update = update_info($_POST['id_user'],$_FILES['images']['name'],$_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone']);
            include_once "views/user/home.php";
            break;
        case 'changepass':
            $id = $_GET['id'];
            $user = get_info_user($id);
            include_once "views/user/taikhoan/changePass.php";
            break;
        case 'cfchange':
            $update = update_pass($_POST['id'],$_POST['oldpass'],$_POST['newpass'],$_POST['repass']);
            header("location:index.php?act=changepass&id=".$_POST['id']);
            break;
        case 'fogotpass':
            include_once "views/user/taikhoan/fogotpassword.php";
            break;
        case 'cf_fogotpass':
            $email = $_POST['email'];
            $user =  fogotpass($email);
            if($user == null){
                $thongbao = "Email không tồn tại";
            }
            else {
                $thongbao = "Mật khẩu của bạn là : ".$user."";
            }
            include_once "views/user/taikhoan/fogotpassword.php";
            break ;
        default:
            include_once "views/user/home.php";
            break;
    } 
    }
    else {
    include_once "views/user/home.php";
    }   


include_once "views/layout/footer.php";
