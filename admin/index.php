<?php
    include '../model/pdo.php';
    include '../model/danhmuc.php';
    include '../model/taikhoan.php';
    include 'header.php';
    include "../model/sanpham.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm': 
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $namedm = $_POST['namedm'];
                        insert_danhmuc($namedm);
                        $thongbao = "Thêm thành công";
                    }
                    include 'danhmuc/add.php';
                break;

            case 'lisdm':
                $listdanhmuc=loadAll_danhmuc();
                include 'danhmuc/list.php';
            break;

            case 'xoadm':
                if(isset($_GET['iddm'])&&$_GET['iddm']>0){
                    delete_danhmuc($_GET['iddm']);
                    // $sql="delete from danhmuc where id=".$_GET['id'];
                    // pdo_execute($sql);
                }
                $sql = "select * from danhmuc order by namedm";
                $listdanhmuc = pdo_query($sql);
                include 'danhmuc/list.php';
            break;

            case 'suadm':
                if(isset($_GET['iddm'])&&$_GET['iddm']>0){
                    $dm=loadOne_danhmuc($_GET['iddm']);
                }
                include 'danhmuc/update.php';
            break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iddm = $_POST['iddm'];
                    $namedm = $_POST['tenloai'];
                    update_danhmuc($iddm, $namedm);
                    $thongbao = "Cập nhật thành công";
               }
                $sql = "update danhmuc set namedm='".$namedm."' where iddm=".$iddm;
                $listdanhmuc = pdo_query($sql);
                include 'danhmuc/list.php';
                break;

                /*Cotroller sản phẩm */
                case 'addsp': 
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['name_sp'];
                        $giasp = $_POST['price'];
                        $mota = $_POST['des'];
                        $filename=$_FILES['img_sp']['name'];
                        $target_dir = "..upload/";
                        $target_file = $target_dir . basename($_FILES["img_sp"]["name"]);
                        if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                            
                          } else {
                          }

                        insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadAll_danhmuc();
                    include 'sanpham/add.php';
                break;

            case 'lissp':
                $listsanpham=loadAll_sanpham();
                include 'sanpham/list.php';
            break;

            case 'xoasp':
                if(isset($_GET['id_sp'])&&$_GET['id_sp']>0){
                    delete_sanpham($_GET['id_sp']);
                }
                $listsanpham=loadAll_sanpham("",0);
                include 'sanpham/list.php';
            break;

            case 'suasp':
                if(isset($_GET['id_sp'])&&$_GET['id_sp']>0){
                    $sanpham=loadOne_sanpham($_GET['id_sp']);
                }
                $listsanpham = pdo_query($sql);
                include 'sanpham/update.php';
            break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_sp=$_POST['id_sp'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['name_sp'];
                    $giasp = $_POST['price'];
                    $mota = $_POST['des'];
                    $filename=$_FILES['img_sp']['name'];
                    $target_dir = "..upload/";
                    $target_file = $target_dir . basename($_FILES["img_sp"]["name"]);
                    if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                                    
                    } else {
                                }
                    update_sanpham($iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Cập nhật thành công";
               }
               $listsanpham=loadAll_sanpham();
                include 'sanpham/list.php';
            break;

            case 'lisdmnew':
                    $listdanhmucnew=loadAll_danhmucnew();
                    include 'danhmucnew/list.php';
            break;

            case 'dskh':
                    $listtaikhoan=loadall_taikhoan("",0);
                    include 'taikhoan/list.php';
            break;

            case 'tk':
                $listthongke=loadall_thongke();
                include 'thongke/list.php';
        break;

            default:
                include 'home.php';
                break;
        }
    }else{
        include 'home.php';
    }
    include "footer.php";
?>