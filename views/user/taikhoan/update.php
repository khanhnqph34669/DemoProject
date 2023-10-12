<div class="row mb">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Cập Nhật Thông Tin Thành Viên</div>
            <div class="row formContent ">
                <form action="" method="post">
                <?php
                extract($info);

                echo '<img class="avtp" src="views/images/' . $images . '" alt="images">';
                echo '<input type="file" name="images"  id="images" value="' . $images . '">';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<br>';
                echo '<label for="name">Name</label>';
                echo '<input type="text" name="name" id="name" value="' . $name . '">';
                echo '<label for="email">Email</label>';
                echo '<input type="email" name="email" id="email" value="' . $email . '">';
                ?>
                </form>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php
        include_once "views/layout/boxRight.php";
        ?>
    </div>
</div>
