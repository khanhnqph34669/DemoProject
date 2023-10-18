<?php
function check_user($email, $password)
{
    $sql = "SELECT * FROM khachhang WHERE email='$email' AND passwords='$password'";
    $user = query_one($sql);
    return $user;
}

function get_info_user($id)
{
    $sql = "SELECT * FROM khachhang WHERE id='$id'";
    $user = query_one($sql);
    return $user;
}

function get_info_user_all()
{
    $sql = "SELECT * FROM khachhang";
    $user = query($sql);
    return $user;
}

function register($name, $email, $password, $repassword)
{
    $sql = "INSERT INTO khachhang(name,email,passwords,roles) VALUES ('$name','$email','$password','1')";
    $thongbao = query($sql);
    if ($thongbao != null) {
        echo "Đăng ký thành công vui lòng đăng nhập để tiếp tục!";
    } else if ($repassword != $password) {
        echo "Đăng ký thất bại";
    }
}

function get_name_roles($id)
{
    $sql = "SELECT name_roles FROM roles where id = '$id'";
    return query_one($sql);
}

function get_roles_all()
{
    $sql = "SELECT * FROM roles";
    return query($sql);
}

function update_info($id, $images, $name, $email, $address, $phone)
{
    if (isset($_POST['updateinfo'])) {
        $id = $_POST['id_user'];
        $images = $_FILES['images']['name'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'] == "" ? 0 : $_POST['phone'];

        if (empty($images)) {
            $sql = "UPDATE khachhang SET name='$name',email='$email',address='$address',phone='$phone' WHERE id=$id";
            return  execute($sql);
        } else {
            $target_dir = "views/images/";
            $target_file = $target_dir . basename($_FILES["images"]["name"]);
            move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
            $sql = "UPDATE khachhang SET images='$images',name='$name',email='$email',address='$address',phone='$phone' WHERE id=$id";
            return  execute($sql);
        }
    }
}

function getOneUser($id)
{
    $sql = "SELECT * FROM khachhang where id = '$id'";
    $result = query_one($sql);
    return $result;
}


function checkPass($id, $password)
{
    $sql = "SELECT * FROM khachhang WHERE id='$id' AND passwords='$password'";
    $user = query_one($sql);
    return $user;
}

function update_pass($id, $oldpass, $password, $repassword)
{
    if (isset($_POST['updatepass'])) {
        $id = $_POST['id'];
        $oldpass = $_POST['oldpass'];
        $password = $_POST['newpass'];
        $repassword = $_POST['repass'];
        $check = checkPass($id, $oldpass);
        $_SESSION['err'] = "";

        if ($check) {
            if ($password == $repassword) {
                $sql = "UPDATE khachhang SET passwords='$password' WHERE id=$id";
                $_SESSION['err'] = "Đổi mật khẩu thành công";
                return execute($sql);
            } else {
                $_SESSION['err'] = "Mật khẩu mới không trùng nhau";
            }
        } else {
            $_SESSION['err'] = "Mật khẩu cũ không đúng";
        }
    }
}

function fogotpass($email)
{
    $sql = "SELECT passwords FROM khachhang WHERE email='$email'";
    $user = query_one($sql);

    if ($user) {
        return $user['passwords'];
    } else {
        return null; // Trả về null nếu email không tồn tại trong cơ sở dữ liệu
    }
}


function update_info_user($id, $images, $name, $email, $address, $phone,$password,$roles)
{
   if(isset($_POST['updateuser'])){
    $id = $_POST['id'];
    $images = $_FILES['images']['name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['passwords'];
    $target_dir = "views/images/";
   if(empty($images)){
    $sql = "UPDATE khachhang SET name='$name',email='$email',address='$address',phone='$phone',passwords='$password',roles='$roles' WHERE id=$id";
    return execute($sql);
   }
   else{
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
    $sql = "UPDATE khachhang SET images='$images',name='$name',email='$email',address='$address',phone='$phone',passwords='$password',roles='$roles' WHERE id=$id";
    return execute($sql);
   }
   }
}

function delete_user($id)
{
    $sql = "DELETE FROM khachhang WHERE id=$id";
    return execute($sql);
}

