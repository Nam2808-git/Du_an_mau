<?php

function insert_danhmuc($namedm){
    $sql="insert into danhmuc( namedm) values($namedm)";
    pdo_execute($sql);
}

function delete_danhmuc($iddm){
    $sql="delete from danhmuc where iddm = ".$_GET['iddm'];
    pdo_execute($sql);
}
    
function loadAll_danhmuc(){
    $sql = "select * from danhmuc order by iddm asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadOne_danhmuc($iddm){
    $sql = "select * from danhmuc where iddm=".$iddm;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($iddm, $namedm){
    $sql="update danhmuc set namedm='".$namedm."' where iddm=".$iddm;
    pdo_execute($sql);
}

?>