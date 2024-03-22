<?php
 function load_top3(){
     $sql = "SELECT*FROM sanpham WHERE 1 order by id desc limit 3" ;
     $listsanpham =pdo_query($sql);
     return $listsanpham;
 }
function loadall_sanpham_home(){
    $sql = "SELECT*FROM sanpham WHERE 1 order by id desc limit 9" ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadall_danhmuc(){
    $sql = "SELECT*FROM loaisanpham WHERE 1 order by id asc " ;
    $listloai =pdo_query($sql);
    return $listloai;
}
function loadall_sanpham_dm($id)
{
    $sql = "SELECT*FROM sanpham WHERE id_loaisanpham = $id order by id desc limit 9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT*FROM sanpham WHERE 1";
    if ($kyw != '') {
        $sql .= " and tenSp like '%$kyw%' ";
    }
    if ($iddm > 0) {
        $sql .= " and id_loaisanpham = '$iddm' ";
    }
    $sql .= " ORDER BY id desc limit 9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// admin
function add__sanpham($sp,$btanh,$bienthe)
{
        $sql = "INSERT INTO sanpham(tenSp,gia,soLuongConLai,thongTinChiTiet,anh,id_loaisanpham,ma) 
                VALUES  ('$sp[0]',$sp[1],$sp[2],'$sp[3]','$sp[4]','$sp[5]','$sp[6]'); ";
                pdo_execute($sql);

        $sqlid = "SELECT id FROM sanpham WHERE ma='$sp[6]' ";
        $id = pdo_query($sqlid);
        $idsp = $id[0]['id'];

        $updatasql = "UPDATE sanpham SET id_anh= $idsp , id_bienthe = $idsp WHERE id = $idsp ";
              pdo_execute($updatasql);

        $anhsql = "INSERT INTO bientheanh(id,anh1,anh2) VALUES ($idsp,'$btanh[0]','$btanh[1]'); ";
        pdo_execute($anhsql);

       $btsql = "INSERT INTO bienthe(id,tenbt,bienthe1,bienthe2,bienthe3) VALUES ($idsp,'$bienthe[0]','$bienthe[1]','$bienthe[2]','$bienthe[3]'); ";
       pdo_execute($btsql);
}
function load_ma($ma){
    $sql = "SELECT * FROM sanpham" ;
    $listma =pdo_query($sql);
    $i=1;
    foreach ($listma as $item){
        if ( $ma== $item[9]){
            $i=0;
        }
    }
    if ($i==1){
        return 1;
    }else{
        return 0;
    }


}
function loadall__sanpham(){
    $sql = "SELECT*FROM sanpham  " ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}

function delete__sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id = $id ";
    pdo_execute($sql);

    $sqlanh = "DELETE FROM bienthe WHERE id = $id ";
    pdo_execute($sqlanh);

    $sqlbienthe = "DELETE FROM bientheanh WHERE id = $id ";
    pdo_execute($sqlbienthe);
}

function update__sanpham($sp,$btanh,$bienthe,$id)
{
    $sqlsp = "UPDATE sanpham SET 
               tenSp='$sp[0]',gia=$sp[1],soLuongConLai=$sp[2],thongTinChiTiet='$sp[3]',
               anh='$sp[4]',id_loaisanpham = '$sp[5]',ma='$sp[6]'
               WHERE id=$id";
    pdo_execute($sqlsp);

    $sqlbtanh = "UPDATE bientheanh SET 
               anh1 = '$btanh[0]',anh2='$btanh[1]'
               WHERE id=$id";
    pdo_execute($sqlbtanh);

    $sqlbt = "UPDATE bienthe SET 
              tenbt = '$bienthe[0]',bienthe1='$bienthe[1]',bienthe2='$bienthe[2]',bienthe3='$bienthe[3]'
               WHERE id=$id";
    pdo_execute($sqlbt);
}
function load__sanpham($id){
    $sql = "SELECT*FROM sanpham WHERE id=$id" ;
    $sanpham =pdo_query($sql);
    return $sanpham;
}
function load__anhsp($id){
    $sql = "SELECT*FROM bientheanh WHERE id=$id" ;
    $sanpham =pdo_query($sql);
    return $sanpham;
}
function load__bienthesp($id){
    $sql = "SELECT*FROM bienthe WHERE id=$id" ;
    $sanpham =pdo_query($sql);
    return $sanpham;
}
function load_top5dm($id){
    $sql = "SELECT*FROM sanpham WHERE id_loaisanpham = $id order by id desc limit 5" ;
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}