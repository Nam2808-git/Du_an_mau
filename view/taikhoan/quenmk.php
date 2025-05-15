
<div class=" mb">
    <div class="left mr demo">
        <div class="row mb">
            <div class="title">QUÊN MẬT KHẨU</div>
            <div class="row content formtaikhoan">
               <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email">
                    </div>
        
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail">
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