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
</style>
<div class=" mb">
    <div class="left mr demo">
        <div class="row mb">
            <?php
                 extract($onesp);
            ?>
            <div class="title"><?=$name_sp?></div>
            <div class="row content">
                <?php
                    $img=$img_path.$img_sp;
                    echo '<div class="img row mb spct"><img src="'.$img.'"></div> ';
                    echo $des; '<br>'
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="title">Bình luận</div>
            <div class="row content">

            </div>
        </div>
        <div class="row">
            <iframe src="view/binhluan/binhluanform.php?id_pro" frameborder="0"></iframe>
        </div>
        <div class="row mb">
            <div class="title">Sản phẩm liên quan</div>
            <div class="row content">
                <?php?>
            </div>
        </div>
    </div>
</div>
<div class="right mb">
    <?php
            include "boxright.php";
        ?>
</div>
</div>