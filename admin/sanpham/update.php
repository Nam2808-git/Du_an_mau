<?php

if (is_array($dm)) {
    extract($dm);
}

$hinhpath = "../upload/" . $img_sp;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' witdh='' height=''>";
} else {
    $hinh = "No photo";
}

?>

<body>
    <div class="box">
        <div class="row">
            <div class="row header">
                <h2>CẬP NHẬT SẢN PHẨM</h2>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if ($iddm == $id) $s = "selected";
                            else $s = "";
                            echo '<option value="' . $iddm . '"' . $s . '>' . $namedm . '</option>';
                        }
                        ?>
                        Mã sản phẩm <br>
                        <input type="text" name="masp">
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp" value="<?= $name_sp ?>">
                    </div>

                    <div class="row mb10">
                        Giá<br>
                        <input type="text" name="giasp" value="<?= $price ?>">
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh">
                        <?= $hinh ?>
                    </div>

                    <div class="row mb10">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10" value="<?= $des ?>"></textarea>
                    </div>

                    <div class="row mb10">
                        <input type="hidden" name="id_sp" id="<?= $id_sp ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=lissp">
                            <input type="button" value="Danh sách">
                        </a>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
</body>