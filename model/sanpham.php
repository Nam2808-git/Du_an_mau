<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql="insert into sanpham(name_sp, price, img_sp, des, iddm) values('$tensp', '$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql="delete from sanpham where id_sp=".$_GET['id_sp'];
    pdo_execute($sql);
}

function loadAll_sanpham_home(){
    $sql = "select * from sanpham where 1 order by id_sp asc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham_top10(){
    $sql = "select * from sanpham where 1 order by view desc limit 0,10 ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham($kw="", $iddm=0){
    $sql="select * from sanpham where 1";
    if($kw!=""){
        $sql.="and name_sp like '%".$kw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql."order by iddm desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql = "select * from danhmuc where iddm=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $namedm;
    }else{
        return "";
    }
}

function loadOne_sanpham($id){
    $sql="select * from sanpham where id_sp=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_sanpham($id_sp, $iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!=""){
        $sql="update sanpham set id_sp='".$iddm."', name_sp='".$tensp."', price='".$giasp."', des='".$mota."', img_sp='".$hinh."' where id_sp=".$id_sp;
    }else{
        $sql="update sanpham set id_sp='".$iddm."', name_sp='".$tensp."', price='".$giasp."', des='".$mota."' where id_sp=".$id_sp;
        pdo_execute($sql);
    }
}
?>