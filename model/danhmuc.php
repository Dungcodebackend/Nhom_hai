<?php
function loadall__danhmuc(){
    $sql = "SELECT*FROM loaisanpham WHERE 1 order by id desc ";
    $listdanhmuc = pdo_query($sql);
    return  $listdanhmuc;
}
function delete__danhmuc($id)
{
    $sql = "DELETE FROM loaisanpham WHERE id = $id ";
    pdo_execute($sql);
}
function add__danhmuc($tenLoai)
{
    $sql = "INSERT INTO loaisanpham(tenLoai) 
                VALUES  ('$tenLoai'); ";
    pdo_execute($sql);
}