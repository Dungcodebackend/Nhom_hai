<?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $idbl = $_POST['id'];
        $noiDung = $_POST['noiDung'];
        upload__bl($idbl,$noiDung);
        $tb="Cập Nhật Thành Công";
    }

  if (isset($_GET['id'])){
      $id = $_GET['id'];
      $ctbl = loadone__bl($id)
?>

<div class="khung">
    <img src="../../upload/binhluan.png" width="300px" height="200px">
    <h3 style="margin: 0">Cập Nhật Nội Dung</h3>
    <p style="font-size: 18px">Tên khách hàng: <span style="font-weight:600"><?php echo $ctbl[0][0]  ?></span></p>
    <p style="font-size: 18px">Nội dung hiện tại: <span style="font-weight:600;color: #45a049"><?php echo $ctbl[0][1] ?></span></p>
    <form action="admin.php?act=upload_binhluan&id=<?php echo $id ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id  ?>">
        <input type="text" name="noiDung" placeholder="Nội dung .." style="width: 500px;height: 30px;padding-left: 10px" required>
        <input type="submit" value="Cập Nhật"  style="width: 100px;height: 30px;">
        <a href="admin.php?act=binh_luan"><input type="button" value="Trở Về"  style="width: 100px;height: 30px;"></a>
    </form>
    <p style="font-size: 18px"><span style="font-weight:600;color: #45a049"><?php if (isset($tb)) echo $tb; ?></span></p>
</div>
<?php
  }
      ?>