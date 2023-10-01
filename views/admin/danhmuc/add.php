<div class="row">
            <div class="row header formTitle"><h2>Thêm mới loại hàng</h2></div>
        </div>
        <div class="row formContent">
            <form action="index.php?act=adddanhmuc" method="post">
                <div class="row mb10">
                    <label for="">Mã loại</label><br>
                    <input type="text" name="autonumber" disabled value="Auto number" readonly>
                    </div>
                    <div class="row mb10">
                    <label for="">Tên loại</label><br>
                    <input type="text" name="name" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="submitbtn" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=editdanhmuc"><input type="button" value="Danh sách"></a>
                    </div>
            </form>
        </div>
        <span class="spanErr"><?php if(isset($thongbao)) echo $thongbao; ?></span>
    </div>
    </body>