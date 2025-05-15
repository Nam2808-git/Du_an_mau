<?php

    function insert_taikhoan($email, $user, $pass){
        $sql="insert into taikhoan(email,user,password) values('$email', '$user','$pass')";
        pdo_execute($sql);
    }  
    
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id_nd desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' AND password='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikoan($id_nd,$user,$password,$email,$address,$tel){
        $sql="update taikhoan set user='".$user."', password='".$password."', email='".$email."', address='".$address."', , tel='".$tel."' where id_nd=".$id_nd;
        pdo_execute($sql);
    }
?>