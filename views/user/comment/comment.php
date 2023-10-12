<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "../../../model/connect.php";
    $idpro = $_GET['idpro'];
    $sql = "SELECT * FROM binhluan WHERE id_sanpham=$idpro ";
    $result = query($sql);
    foreach ($result as $row) {
        $sql = "SELECT * FROM khachhang WHERE id=" . $row['id_khachhang'];
        $result = query_one($sql);
        $name = $result['name'];
        extract($row);
        echo "<div class='row mb10'>
            <div class='comment'>
            <div class='user-info'>
            <div class='name'>$name</div>
         <div class='date'>$datecomment</div>
        </div>
     <div class='content'>$content</div>
        </div>

            </div>";
    }
    ?>


</body>
<style>
    .comment {
    display: flex;
    border: 1px solid #e9e9e9;
    padding: 10px;
    margin: 10px 0;
    background-color: #f9f9f9;
}

.user-info {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.name {
    font-weight: bold;
}

.date {
    font-size: 12px;
    color: #777;
    margin-top: 5px;
}

.content {
    flex: 4;
    margin-left: 10px;
}

/* Thêm các hiệu ứng hoặc tuỳ chỉnh khác tùy ý */

</style>
</html>