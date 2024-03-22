<?php
function thongtin_sanpham($id)
{
    $sql = "SELECT id,anh,tenSp,gia  FROM sanpham WHERE id=$id" ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}

function thongtin_bienthe($id)
{
    $sql = "SELECT tenbt,bienthe1,bienthe2,bienthe3  FROM bienthe WHERE id=$id" ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function add__hoadon($maVanDon,$ten,$email,$soDienThoai,$diaChi,$soLuong,$tong,$thoiGian)
{
    $sql = "INSERT INTO hoadon(maVanDon,ten,email,soDienThoai,diaChi,soLuong,tongTien,thoiGian) 
                VALUES  ('$maVanDon','$ten','$email','$soDienThoai','$diaChi',$soLuong,'$tong','$thoiGian'); ";
    pdo_execute($sql);
}
function add__spbill($anh,$ten,$loai,$soLuong,$tongTien,$id_bill){
    $sql = "INSERT INTO bill_ct(anh,ten,loai,soLuong,tongTien,id_bill) 
                VALUES  ('$anh','$ten','$loai','$soLuong','$tongTien','$id_bill'); ";
    pdo_execute($sql);
}
function update_soluong($id,$soluong)
{
    $sqlsp = "UPDATE sanpham SET 
              soLuongConLai=soLuongConLai-$soluong
               WHERE id= $id ";
    pdo_execute($sqlsp);
}
function loadall__hoadon()
{
    $sql = "SELECT*FROM hoadon  " ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function load__trangthai($id){
    $sql = "SELECT maVanDon,trangThai  FROM hoadon WHERE id=$id" ;
    $listhoadon =pdo_query($sql);
    return $listhoadon;
}
function upload__trangthai($id,$trangThai){
    $sqlsp = "UPDATE hoadon SET 
               trangThai ='$trangThai'
               WHERE id= $id ";
    pdo_execute($sqlsp);
}
function loadone__hoadon($id)
{
    $sql = "SELECT*FROM hoadon WHERE id=$id  " ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadbill__ct($id)
{
    $sql = "SELECT*FROM bill_ct WHERE id_bill='$id'  " ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}













?>
