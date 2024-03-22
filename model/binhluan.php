<?php
function  add__bl($thoiGian,$noiDung,$iduser, $idsp)
{
    $sql = "INSERT INTO binhluan(thoiGian,noiDung,nguoi_id,sanpham_id) 
                VALUES  ('$thoiGian','$noiDung','$iduser','$idsp'); ";
    pdo_execute($sql);
}
function load__bl($id){
    $sql = "SELECT nguoi.ten,binhluan.noiDung,binhluan.thoiGian
FROM binhluan
JOIN nguoi ON binhluan.nguoi_id = nguoi.id
JOIN sanpham ON binhluan.sanpham_id = sanpham.id WHERE sanpham.id=$id; " ;
    $listbl =pdo_query($sql);
    return $listbl;
}
function loadall__bl(){
    $sql = "SELECT sanpham.ma,binhluan.id,nguoi.ten,binhluan.noiDung,binhluan.thoiGian
FROM binhluan
JOIN nguoi ON binhluan.nguoi_id = nguoi.id
JOIN sanpham ON binhluan.sanpham_id = sanpham.id " ;
    $listbl =pdo_query($sql);
    return $listbl;
}
function delete__bl($id)
{
    $sql = "DELETE FROM binhluan WHERE id = $id ";
    pdo_execute($sql);
}
function loadone__bl($id){
    $sql = "SELECT nguoi.ten,binhluan.noiDung,binhluan.thoiGian
FROM binhluan
JOIN nguoi ON binhluan.nguoi_id = nguoi.id
JOIN sanpham ON binhluan.sanpham_id = sanpham.id WHERE binhluan.id=$id; " ;
    $listbl =pdo_query($sql);
    return $listbl;
}
function upload__bl($id,$noiDung)
{
    $sqlbt = "UPDATE binhluan SET 
              noiDung='$noiDung'
               WHERE id=$id";
    pdo_execute($sqlbt);
}