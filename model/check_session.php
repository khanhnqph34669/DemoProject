<?php
    function checkSession($user){
        $user = $_SESSION['user'];
        if($user=0){
            header("location:views/admin/index.php");
        }
        else{
            header("location:index.php");
        }
        
    }
?>