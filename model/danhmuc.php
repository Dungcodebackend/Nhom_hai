<?php
function loadall__danhmuc(){
    $sql = "SELECT*FROM loaisanpham ";
    $listdanhmuc = pdo_query($sql);
    return  $listdanhmuc;
}