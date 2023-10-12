<?php
include_once "model/connect.php";


function check_user($email,$password){
   $sql = "SELECT * FROM khachhang WHERE email='$email' AND passwords='$password'";
   $user = query_one($sql);
   return $user;
}

?>