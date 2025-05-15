<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .boxcenter {
            width: 70%;
            margin: 0 auto;
        }

        .row {
            float: left;
            width: 100%;
        }

        .mb {
            margin-bottom: 30px;
        }

        .demo {
            min-height: 100px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="row">
            <div class="row header">
                <h2>THÊM MỚI SẢN PHẨM</h2>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $iddm . '">' . $namedm . '</option>';
                            }
                            ?>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                        <input type="text" name="name_sp">
                    </div>

                    <div class="row mb10">
                        Giá<br>
                        <input type="text" name="price">
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="img_sp">
                    </div>

                    <div class="row mb10">
                        Mô tả<br>
                        <textarea name="des" id=""></textarea>
                    </div>

                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
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