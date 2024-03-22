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
function  load_khachhang($id)
{
    $sql = "SELECT * FROM nguoi WHERE id = '$id' ";
    $tkuse = pdo_query_one($sql);
    return $tkuse;
}

function  add__user($tenDangNhap,$matKhau,$ten, $email,$soDienThoai,$diaChi)
{
    $sql = "INSERT INTO nguoi(tenDangNhap,matKhau,ten,soDienThoai, email,diaChi) 
                VALUES  ('$tenDangNhap','$matKhau','$ten','$soDienThoai','$email','$diaChi'); ";
    pdo_execute($sql);

}
function  upload__users($id,$tenDangNhap,$matKhau,$ten, $email,$soDienThoai,$diaChi)
{
    $updatasql = "UPDATE nguoi SET tenDangNhap='$tenDangNhap',matKhau='$matKhau',ten='$ten',email='$email',soDienThoai='$soDienThoai',diaChi='$diaChi'
                  WHERE id='$id'";
    pdo_execute($updatasql);
}

function loadall_khachhang()
{
    $sql = "SELECT*FROM nguoi  " ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}





?>