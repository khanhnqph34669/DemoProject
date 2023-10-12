<?php



function check_user($email,$password){
   $sql = "SELECT * FROM khachhang WHERE email='$email' AND passwords='$password'";
   $user = query_one($sql);
   return $user;
}

function get_info_user($id){
    $sql = "SELECT * FROM khachhang WHERE id='$id'";
    $user = query_one($sql);
    return $user;
}

function get_info_user_all(){
   $sql = "SELECT * FROM khachhang";
   $user = query($sql);
   return $user;
}

function register($name,$email,$password,$repassword){
    $sql = "INSERT INTO khachhang(name,email,passwords,roles) VALUES ('$name','$email','$password','1')";
    $thongbao = query($sql);
      if($thongbao!=null){
          echo "Đăng ký thành công vui lòng đăng nhập để tiếp tục!";
      }
      else if($repassword!=$password){
          echo "Đăng ký thất bại";
      }
}
?>