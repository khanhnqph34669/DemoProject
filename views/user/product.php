<?php
    extract($danhmuc);
?>

<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title"><?php echo "$name"?></div>
            <div class=" row content">
                <?php
                   $i = 0;
                   foreach ( $listSanPham as $row) {
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
        
    </div>
    <div class="boxright">
        <?php
        include_once "views/layout/boxRight.php";
        ?>
    </div>
</div>