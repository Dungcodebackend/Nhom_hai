<?php
    if (isset($_POST['dathang']) && $_POST['dathang']){
        $maVanDon = "QA".time();
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $soDienThoai = $_POST['soDienThoai'];
        $diaChi = $_POST['diaChi'];
        $tong = $_POST['tong'];
        $soLuong = $_POST['soLuong'];
        $thoiGian = date('Y-m-d H:i:s');
        add__hoadon($maVanDon,$ten,$email,$soDienThoai,$diaChi,$soLuong,$tong,$thoiGian);
        foreach ($_SESSION['sp'] as $item=>$value){
            $ttsp = thongtin_sanpham($value[0]);
            foreach ($ttsp as $sanphamone){
                extract($sanphamone);
                $tien = $gia * $value[2];
                add__spbill($anh,$tenSp,$value[1],$value[2],$tien,$maVanDon);
                update_soluong($value[0],$value[2]);
            }

        }
       unset($_SESSION['sp']);

        ?>
            <div style="height: 10px"></div>
            <div style="height: 500px;background: #f1efef" >
            <div style="text-align: center;padding: 40px 0"><img src="./upload/thanhcong.webp" width="110px" height="110px"></div>
            <h3 style="font-weight: 600;font-size: 24px;text-align: center">Đặt Hàng Thành Công!</h3>
            <p style="font-size: 16px;text-align: center;color: #696464;padding-top: 10px">Cảm ơn quý khách hàng đã đặt hàng tại QUANGANHLED </p>
            <p style="font-size: 16px;text-align: center;color: #696464;padding-top: 10px">Mã đơn hàng : <span style="color:red;font-weight: 600"><?php echo $maVanDon ?></span> </p>
            <div style="text-align: center;padding-top: 80px;padding-left: 42.5%"><a href="index.php" style="text-decoration: none"><p style="font-weight: 600;width: 150px;height: 40px;color:#e5fbfb;background:#59e34f;padding-top: 12px;border-radius: 4px">VỀ TRANG CHỦ</p></a></div>
            </div>
            <div style="height: 10px"></div>

 <?php

    }else{

     if (!empty($_SESSION['sp'])){
?>

<div class="boxtrai mr demo">
    <div class="boxtitle">Thông tin cá nhân</div>
    <div class="boxcontent form-tk">
        <form action="index.php?act=hoa_don" method="post">

            <div class="row mb10">
                Tên
                <input type="text" name="ten" placeholder="user" value="<?php if (isset($_SESSION['nguoi'])){echo $_SESSION['nguoi']['ten'];}?>" required/>
            </div>

            <div class="row mb10">
                Email<br />
                <input type="email" name="email" placeholder="email" value="<?php if (isset($_SESSION['nguoi'])){echo $_SESSION['nguoi']['email'];}?>" required/>
            </div>

            <div class="row mb10" class="" style="padding-bottom: 10px;">
                Số điện thoại<br />
                <input type="number" name="soDienThoai" placeholder="Phone" value="<?php if (isset($_SESSION['nguoi'])){echo $_SESSION['nguoi']['soDienThoai'];}?>" required style="width: 100%;height: 30px;border-radius: 5px;border: 1px double gainsboro;padding-left: 10px" />
            </div>
            <div class="row mb10" class="" style="padding-bottom: 10px;">
                Địa chỉ <br />
                <input type="text" name="diaChi" placeholder="Phone" value="<?php if (isset($_SESSION['nguoi'])){echo $_SESSION['nguoi']['diaChi'];}?>"  required/>
            </div>

            <div class="row mb10 frmdsloai" >
                <table >

                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Sản Phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col" class="text-center">Giá</th>
                        <th scope="col" class="text-right">Thành Tiền</th>
                    </tr>
                    <?php
                    $tong = 0;
                    $i=0;
                    foreach ($_SESSION['sp'] as $item=>$value){
                        $ttsp = thongtin_sanpham($value[0]);
                        foreach ($ttsp as $sanphamone){
                            extract($sanphamone);
                            $tien = $gia * $value[2];
                            echo  "
                                 <tr>
                                     <td>$item</td>
                                      <td><img src='./upload/$anh' style='width: 100px;height: 100px' /> </td>
                                   <td>$tenSp </td>
                                   <td>$value[1] </td>
                                   <td><input class='form-control' type='number' value='$value[2]' style='width:40px;text-align:center' readonly /></td>
                                   <td class='text-right' ><p style='width: 110px'>$gia VND</p></td>                                
                                   <td><p style='width: 110px'>$tien VND</p></td>
                                                               
                         </tr>";
                            $tong+=$tien;
                            $i+=$value[2];
                        }
                    }
                    ?>
                    <tr>
                        <td>Phí Ship</td>
                        <td class="text-right">25000 VND</td>
                    </tr>

                    <tr>
                        <td><strong>Thanh toán</strong></td>
                        <td class="text-right"><strong><?php echo $tong+25000 ?> VND</strong></td>
                        <input type="hidden" name="tong" placeholder="Phone" value="<?php echo $tong+25000 ?>" />
                        <input type="hidden" name="soLuong" placeholder="Phone" value="<?php echo $i ?>"  />
                    </tr>
                </table>
            </div>
            <div class="phuongthuc">
                <div class="thuchienpt">
                    <div class="thuchienpt1">
                        <input type="submit" name="dathang" value="Đặt Hàng"  class="btn btn-block btn-light">
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
<?php
}else{
    header("Location:  ./view/error/404.html");
}
    }
?>
