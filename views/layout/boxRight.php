<div class="row mb ">
    <div class="title">
        <p>Tài khoản</p>
    </div>
    <?php
    
    if (!isset($_SESSION['user'])) {
        echo '<div class="content formAccount">
            <form action="index.php?act=sigin" method="post">
                <div class="row mb10">
                    <label for="username">Email</label><br>
                    <input type="text" name="email" id="username">
                </div>
                <div class="row mb10">
                    <label for="password">Mật khẩu</label><br>
                    <input type="password" name="password" id="password">
                </div>
                <div class="row mb10">
                    <input type="checkbox">Ghi nhớ tài khoản?<br>
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
            </form>
            <li>
                <a href="">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=register">Đăng kí thành viên</a>
            </li>
        </div>';
    } else {
        extract($_SESSION['user']);
        echo '<div class="content formAccount">
        <p>Xin chào ' . $name .', bạn đã đăng nhập!</p>
        ';
        echo  '<img class="avt" src="views/images/'.$images.'" alt="images">';
        if($roles == 0){
            echo  '<img class="tichxanh" src="views/images/tichxanh.png" alt="images">';
        }
        echo '<ul>
            <li><a href="index.php?act=update_profile&id='.$_SESSION['user']['id'].'">Cập nhật tài khoản</a></li>';
        if ($roles == 0) {
            echo '<li><a href="index.php?act=admin">Quản trị</a></li>';
        }
        echo '<li><a href="index.php?act=logout">Đăng xuất</a></li>
        </ul>
    </div>';
    }
    ?>
</div>

<div class="row mb ">
    <div class="title">
        <p>Danh mục</p>
    </div>
    <div class="content2 menudoc">
        <ul>
            <?php

            foreach ($listdanhmuc as $row) {
                extract($row);
                $listsanpham = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="index.php?act=danhmuc&id=' . $id . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter searchBox">
        <form action="index.php?act=search" method="post">
            <input type="text" name="keywords" placeholder="Từ khoá tìm kiếm"> <button type="submit" name="search">Search</button>
        </form>
    </div>
</div>
<div class="row mb">
    <div class="title">
        <p>Top 10 yêu thích</p>
    </div>
    <?php
    foreach ($sanphamtop as $row) {
        extract($row);
        $img = $image_path . $img;
        echo '
                    <div class="row mb10 top10">
                        <a href="index.php?act=chitietsanpham&id=' . $id . '"><img src="' . $img . '" alt=""></a>
                        <a href="index.php?act=chitietsanpham&id=' . $id . '">' . $name . '</a>
                    </div>';
    }
    ?>
    <div class="row content">
        <!-- <div class="row mb10 top10">
                    <img src="views/images/2.jpg" alt="">
                    <a href="">Sir Rodney's Marmalade</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/3.gif top10" alt="">
                    <a href="">Sản phẩm 2</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/4.png" alt="">
                    <a href="">Sản phẩm 3</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/1.jpg" alt="">
                    <a href="">Sản phẩm 4</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/2.jpg" alt="">
                    <a href="">Sir Rodney's Marmalade</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/3.gif top10" alt="">
                    <a href="">Sản phẩm 2</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/4.png" alt="">
                    <a href="">Sản phẩm 3</a>
                </div>
                <div class="row mb10 top10">
                    <img src="views/images/1.jpg" alt="">
                    <a href="">Sản phẩm 4</a>
                </div> -->
    </div>
</div>