<style>
    tr > th{
        text-align: center;
        width: 200px;
        padding-bottom: 20px;
    }
    tr > td{
        text-align: center;
        width: 200px;
    }
    .top_top{
        height: 100px;
    }
</style>
<div class="top_top"></div>
<?php
if (isset($_GET['id'])){
    $sp = thongtin_sanpham($_GET['id']);
    $bt=thongtin_bienthe($_GET['id']);
?>
    <table class="styled-table">

    <thead>
    <tr>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th><?php echo $bt[0][0] ?></th>
        <th>Xác Nhận</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="index.php?act=gio_hang" method="post">
        <td><img src="<?php echo './upload/'.$sp[0][1] ?>" width="100px" height="100px" ></td>
        <td><?php echo $sp[0][2] ?></td>
        <td><?php echo $sp[0][3] ?> VND</td>
        <td>
            <input type="radio" name="bt" value="<?php echo $bt[0][1] ?>"><?php echo $bt[0][1] ?><br>
            <input type="radio" name="bt" value="<?php echo $bt[0][2] ?>"><?php echo $bt[0][2] ?><br>
            <input type="radio" name="bt" value="<?php echo $bt[0][3] ?>"><?php echo $bt[0][3] ?>
        </td>
        <td>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name="ok" value="OK"><br>
        </td>
        </form>
    </tr>
    </tbody>
</table>
<div class="top_top"></div>
<?php
}
    ?>