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
            $i = 0;
            foreach ($timkiem as $row) {
                extract($row);
                $img = $image_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }

                $i++;
                echo
                '
                    <div class="product ' . $mr . '">
                        <div class="row img "><a href="index.php?act=chitietsanpham&id=' . $id . '">
                        <img src="' . $img . '" alt="">
                        </a>
                        </div>
                        <a href="index.php?act=chitietsanpham&id=' . $id . '">' . $name . '</a>
                        <p>' . $price . 'VND' . '</p>
                </div>';
            }

            ?>

        </div>
    </div>
    <div class="boxright">
        <?php
        include_once "views/layout/boxRight.php";
        ?>
    </div>
</div>