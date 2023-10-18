<?php
function checkSession($roles)
{
    if ($roles != 0) {
        $check = true;
        return header("Location:../../");
    }
    
}
