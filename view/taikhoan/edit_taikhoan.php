
<div class=" mb">
    <div class="left mr demo">
        <div class="row mb">
            <div class="title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row content formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
               <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập 
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_nd" value="<?=$id_nd?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
               </form>
               <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
               ?>
            </div>
        </div>
    </div>
</div>
<div class="right mb">
    <?php
            include "view/boxright.php";
        ?>
</div>
</div>
<style>
    .pro {
        margin-right: 15px;
    }

    .namesp {
        text-align: center;
        font-size: 18px;
    }

    .price {
        font-size: 18px;
        font-weight: 700;
        text-align: center;
    }

    .spct{
        text-align: center;
    }

    .img img{
        width: 500px;
        height: 350px
    }

.formtaikhoan input[type='email'],
.formtaikhoan input[type='reset']
 {
    width: 100%;
    border: 1px #ccc solid;
    padding: 5px 10px;
    border-radius: 4px;
}
</style>