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
                <h2>Thêm sản phẩm</h2>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="namedm">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=lisdm">
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