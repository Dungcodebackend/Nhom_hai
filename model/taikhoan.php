<?php
function checkuser($user,$pass)
{
    $sql = "SELECT * FROM nguoi WHERE tenDangNhap = '$user' AND matKhau = '$pass' ";
    $tkuse = pdo_query_one($sql);
    $sql = "SELECT * FROM admin WHERE ten = '$user' AND matkhau = '$pass' ";
    $tkadm = pdo_query_one($sql);
    if (!empty( $tkuse)){
        $tkuse = [$tkuse,0];
        return $tkuse;
    }
    if (!empty( $tkadm)){
        $tkadm = [$tkadm,1];
        return $tkadm;
    }
}

?>