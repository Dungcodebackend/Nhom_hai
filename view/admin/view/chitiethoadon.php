<?php
    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $hd= loadone__hoadon($id);

?>
<div class="boxtrai mr demo" style="padding-left: 30px;padding-top: 30px">
    <a href="admin.php?act=hoa_don"><button> << Trở lại </button></a>
   <h3 style="margin: 0;padding-top: 30px;text-align: center">THÔNG TIN ĐƠN HÀNG</h3>
    <div class="boxcontent form-tk">
        <h4>Thông tin người nhận hàng</h4>
            <p style="padding-left: 20px">Họ và tên : <?php echo $hd[0][2] ?></p>
            <p style="padding-left: 20px">email : <?php echo $hd[0][3] ?></p>
            <p style="padding-left: 20px">Số điện thoại : <?php echo $hd[0][4] ?></p>
            <p style="padding-left: 20px">Địa Chỉ : <?php echo $hd[0][5] ?></p>
        <h4 >Thông tin đơn hàng</h4>
            <p style="padding-left: 20px">Mã đơn hàng : <?php echo $hd[0][1] ?></p>
            <p style="padding-left: 20px">Thời gian đặt hàng : <?php echo $hd[0][9] ?></p>
            <p style="padding-left: 20px">Số lượng : <?php echo $hd[0][6] ?></p>
            <p style="padding-left: 20px">Tổng tiền : <?php echo $hd[0][7] ?> VND</p>
            <p style="padding-left: 20px">Trạng thái đơn hàng : <?php echo $hd[0][8] ?></p>
        <h4>Thông tin sản phẩm</h4>
        <table class="styled-table" style="margin: 0">
            <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Loại</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>

            </tr>
            </thead>

            <tbody>
            <?php
            $list =loadbill__ct($hd[0][1]);
            $i=0;
            foreach ($list as $ma){
                extract($ma);
                echo " <tr class='active-row'>
                             <td>$i</td>
                             <td><img src='../../upload/$anh' width='80px' height='80px' </td>
                              <td>$ten</td>
                              <td>$loai</td>
                               <td>$soLuong</td>
                                <td>$tongTien VND</td>
                                </tr>";
                $i++;
            }
            ?>

            <!-- and so on... -->
            </tbody>
        </table>
    </div>
</div>
<?php
    }
?>