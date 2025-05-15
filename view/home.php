<style>
    .pro {
        margin-right: 12px;
    }

    .namesp {
        text-align: center;
    }

    .price {
        font-weight: 700;
        text-align: center;
    }
</style>
<div class=" mb">
    <div class="left mr demo">
        <div class="row">
            <div class="banner">
                <div>
                    <img src="upload/banner.jpg" alt="">
                </div>
            </div>
        </div>
        <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh=$img_path.$img_sp;
                        $linksp="index.php?act=sanphamct&id_sp=".$id_sp;
                        if(($i==2)||($i==5)||($i==8)){
                            $mr="mr";
                        }else{
                            $mr="";
                        }
                        echo '<a href="'.$linksp.'" >
                        <div class="pro">
                        <div class="row img">
                                <img src="'.$hinh.'" alt="">
                        </div>
                        <div class="namesp">
                            <a href="'.$linksp.'">'.$name_sp.'</a>
                        </div>
                        <div class="price">
                            <p>'.$price.'</p>
                        </div>
                    </div></a>';
                    };
                ?>
    </div>
</div>
<div class="right mb">
    <?php
                    include 'boxright.php';
                ?>
</div>
</div>