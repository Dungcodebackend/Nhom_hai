<?php
function tongquan_sp(){
    $sql = "SELECT COUNT(*) AS 'soluong', id_loaisanpham AS 'id' FROM sanpham GROUP BY id_loaisanpham;";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function tongquan_tongsp(){
    $sql = "SELECT COUNT(*) AS 'soluong' FROM sanpham ;";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function tongquan_tendm($id){
    $sql = "SELECT * FROM loaisanpham WHERE id=$id ;";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function tongquan_tongkh(){
    $sql = "SELECT COUNT(*) AS 'soluong' FROM nguoi ;";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}