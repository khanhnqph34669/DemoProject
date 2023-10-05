<div class="row mb ">
    <div class="boxleft mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="views/images/banner1.png" style="width:100%">
                     
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="views/images/banner2.png" style="width:100%">
                        
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="views/images/banner3.jpg" style="width:100%">
                       
                    </div>

                    <!-- Next and previous buttons -->
                    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
        $i=0;
                foreach($sanphamnew as $row){
                    extract($row);
                    $img = $image_path.$img;
                     if(($i==2)||($i==5)||($i==8)){
                         $mr = "";
                     }
                     else{
                         $mr = "mr";
                     }

                        $i++;
                    echo 
                    '
                    <div class="product '.$mr.'">
                        <div class="row img ">
                        <img src="'.$img.'" alt="">
                        </div>
                        <a href="index.php?act=chitietsanpham&id='.$id.'">'.$name.'</a>
                        <p>'.$price.'</p>
                </div>';

                }
            
            ?>

        </div>
    </div>
    <div class="boxright">
        <div class="row mb ">
            <div class="title">
                <p>Tài khoản</p>
            </div>
            <div class="content formAccount">
                <form action="" method="post">
                    <div class="row mb10">
                        <label for="username">Tên đăng nhập</label><br>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="row mb10">
                        <label for="password">Mật khẩu</label><br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="row mb10">
                        <input type="checkbox">Ghi nhớ tài khoản?<br>
                        <input type="submit" value="Đăng nhập">
                    </div>

                </form>
                <li>
                    <a href="">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="">Đăng kí thành viên</a>
                </li>
            </div>
        </div>
        <div class="row mb ">
            <div class="title">
                <p>Danh mục</p>
            </div>
            <div class="content2 menudoc">
                <ul>
                    <?php 
                    
                        foreach($listdanhmuc as $row){
                            extract($row);
                            $listsanpham = "index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="index.php?act=danhmuc&id='.$id.'">'.$name.'</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searchBox">
                <form action="" method="post">
                    <input type="text" placeholder="Từ khoá tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row mb">
            <div class="title">
                <p>Top 10 yêu thích</p>
            </div>
            <div class="row content">
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
                </div>
            </div>
        </div>
    </div>
</div>