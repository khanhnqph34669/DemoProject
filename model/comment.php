<?php
function insert_comment($id_khachhang, $content, $id_sanpham, $date)
{
    $sql = "INSERT INTO binhluan(content,id_sanpham,id_khachhang,datecomment) VALUES ('$content','$id_sanpham','$id_khachhang','$date')";
    $comment = execute($sql);
    return $comment;
}

function load_all_comment()
{
    $sql = "SELECT * FROM binhluan";
    $comment = query($sql);
    return $comment;
}

function delete_comment($id){
    $sql = "DELETE FROM binhluan WHERE id = '$id'";
    $comment = execute($sql);
    return $comment;
}


