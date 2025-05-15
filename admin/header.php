<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../st.css">
    <style>
        .boxcenter {
            width: 70%;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: black;
        }

        .row {
            float: left;
            width: 100%;
        }

        .mb {
            margin-bottom: 20px;
        }

        .demo {
            min-height: 100px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="row mb headeradmin">
            <h1>ADMIN</h1>
        </div>
        <div class="menu mb demo">
            <ul>
                <li>
                    <a href="../index.php">Trang chủ</a>
                </li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Hàng hóa</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=bl">Bình luận</a></li>
                <li><a href="index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
</body>