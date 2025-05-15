<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadAll_sanpham_home();
    $dsdm=loadAll_danhmuc();
    $dstop10=loadAll_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kw'])&&($_POST['kw']!="")){
                    $kw=$_POST['kw'];
                }else{
                    $kw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                }
                $dssp=loadAll_sanpham($kw, $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;

            case 'sanphamct':
                if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){ 
                    $id=$_GET['id_sp'];
                    $onesp=loadOne_sanpham($id);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['password'];
                    insert_taikhoan($email, $user, $pass);
                    $thongbao = "Đã dăng ký thành công. Bạn có thể đăng nhập ";
                }
                include "view/taikhoan/dangky.php";
                break;

                case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user=$_POST['user'];
                        $pass=$_POST['password'];
                        $checkuser = checkuser($user, $pass);
                        if(is_array($checkuser)){
                            $_SESSION['user'] = $checkuser;
                            // $thongbao = "Đã đăng nhập thành công";
                            header('Location: index.php');
                        }
                        else{
                            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                        }
                    }
                    include "view/taikhoan/dangky.php";
                    break;

                case 'edit_taikhoan':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $user=$_POST['user'];
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $id_nd=$_POST['id_nd'];
                        
                        update_taikoan($id_nd,$user,$password,$email,$address,$tel);
                        $_SESSION['user'] = checkuser($user, $pass);
                        header('Location: index.php?act=edit_taikhoan');
                    }
                    include "view/taikhoan/edit_taikhoan.php";
                    break;

                    case 'quenmk':
                        if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
        
                            $email=$_POST['email'];
                            
                            $checkemail = checkemail($email);
                            if(is_array($checkemail)){
                                $thongbao = "Mật khẩu của bạn là".$checkemail['password'];
                            }else{
                                $thongbao = "Email này không tồn tại";
                            }
                        }
                        include "view/taikhoan/quenmk.php";
                        break;

            case 'thoat':
                session_unset();
                header('Location:index.php');
                break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            case 'lienhe':
                include "view/lienhe.php";
                break;

            case 'hoidap':
                include "view/hoidap.php";
                break;

            case 'thongke':
                include "view/thongke.php";
                break;   

            default:
                include "view/home.php";
                break;
        }
    }
    else{
        include "view/home.php";
    } ;
?>