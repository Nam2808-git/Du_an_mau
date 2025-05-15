
<div class="row mb">
                    <div class="title">Tài khoản</div>
                    <div class="content formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                          ?>
                                <div class="row mb10">
                                Hello <br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                    <?php if($role==1){

                                    ?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập trang Admin</a>
                                </li>
                                    <?php
                                        }
                                    ?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>  
                            <?php
                                }else{
                            ?>
                            
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="password">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="">Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li><br>
                        <li><a href="index.php?act=dangky">Đăng kí</a></li>
                           <?php
                                }
                            ?>
                    </div>
                </div>
                
                <div class="row mb">
                    <div class="title">Danh mục</div>
                    <div class="content2 cate">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&iddm=".$iddm;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$namedm.'</a>
                                        </li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="search">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" placeholder="Tìm kiếm" name="kw">
                            <div class="nut">
                                <input type="submit" name="timkiem" value="Tìm kiếm">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="title">Top 10 sản phẩm</div>
                    <div class="row content">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&id_sp=".$id_sp;
                                $img = $img_path.$img_sp;
                                echo '<div class="row mb10 top10">
                                    <a href="'.$linksp.'">
                                        <img src="'.$img.'" alt="">
                                        '.$name_sp.'
                                    </a>
                                </div>';
                            }
                        ?>
                    </div>
                </div>