<?php
extract($detail);
?>
<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title"><?php echo '<p>' . $name . ' - Chi tiết sản phẩm' . '</p>' ?></div>
            <div class=" row content">
                <?php

                $img = $image_path . $img;
                echo ' <div class="row mb10 imgProduct">
                <img src="' . $img . '" alt="">
            </div>
            <div class="row mb10">

                <div class="row mb10">
                    <div class="nameProduct">' . $name . '</div>
                </div>
                <div class="row mb10">
                    <div class="price">' . $price . 'đ</div>
                </div>
                <div class="row mb10">
                    <div class="des">' . $des . '</div>
                </div>
                <div class="row mb10">
                    <div class="row mb10">
                        <div class="title">Số lượng</div>
                    </div>
                    <div class="row mb10">
                        <input type="number" name="" id="" value="1">
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Thêm vào giỏ hàng">
                    </div>
                </div>
            </div>';
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="title">Bình luận</div>
            <div class=" row content">
                <iframe src="views/user/comment/comment.php?idpro=<?php echo $id ?>" frameborder="0" width="100%" height="300px">
                </iframe>
                <form class="comment-form" action="index.php?act=" method="post">
                    <div class="form-group">
                        <label for="comment">Bình luận:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Thêm bình luận"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng</button>
                </form>
            </div>
        </div>
        <div class="row mb">
            <div class="title">Sản phẩm cùng loại</div>
            <div class=" row content">
                <?php
                foreach ($cungloai as $row) {
                    extract($row);
                    $img = $image_path . $img;
                    echo '
                    <div class="row mb10 top10">
                        <ul>
                        <li><a href="index.php?act=chitietsanpham&id=' . $id . '">' . $name . '</a></li>
                        </ul>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php
        include_once "views/layout/boxRight.php";
        ?>
    </div>
</div>