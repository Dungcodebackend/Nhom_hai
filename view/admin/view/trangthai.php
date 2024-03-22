<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $idsp= $_POST['id'];
    $trangThai = $_POST['trangThai'];
    upload__trangthai($idsp,$trangThai);
    $thongbao = "Cập Nhật Thành Công !";
}
 if(isset($_GET['id'])){
     $id=$_GET['id'];
     $hoadon=load__trangthai($id)
?>

<div class="khung">
    <img src="../../upload/hanghoa.jpeg" width="300px" height="200px">
    <h3 style="margin: 0">Cập Nhật Trang Thái Đơn Hàng</h3>
    <p style="font-size: 18px">Mã đơn hàng: <span style="font-weight:600"><?php echo $hoadon[0][0] ?></span></p>
    <p style="font-size: 18px">Trang thái hiện tại: <span style="font-weight:600;color: #45a049"><?php echo $hoadon[0][1] ?></span></p>
    <form action="admin.php?act=trang_thai&id=<?php echo $id ?>" method="post">
        <input type="hidden" name="id" value="<?php  echo $id  ?>">
        <input type="text" name="trangThai" placeholder="Trạng thái" style="width: 500px;height: 30px;padding-left: 10px" required>
        <input type="submit" value="Cập Nhật"  style="width: 100px;height: 30px;">
        <a href="admin.php?act=hoa_don"><input type="button" value="Trở Về"  style="width: 100px;height: 30px;"></a>
    </form>
    <p style="font-size: 18px"><span style="font-weight:600;color: #45a049"><?php
     if(isset($thongbao)){
         echo $thongbao;
     }
         ?></span></p>
</div>
<style>
    .khung{
        width: 50%;
        height: 100%;
        padding: 0px 12%;
    }
</style>
<?php
 }else{
     header('Location: ../../view/error/404.html');
 }
     ?>