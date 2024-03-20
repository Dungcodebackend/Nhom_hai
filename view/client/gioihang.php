<style>
    th , td {
        width: 210px;
    }

</style>
<div class="container">
    <div class="row">
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai" >
                <?php

                    if (isset($_POST['ok'])){
                         $bt = $_POST['bt'];
                         $id = $_POST['id'];
                         $sl = 1;
                         $listsp = [$id,$bt,$sl];
                        $check = 'ok';
                        if (!empty($_SESSION['sp'])) {

                            foreach ($_SESSION['sp'] as $item=>$value){
                                if ($value[0] == $id ){
                                   $check='ko';
                                }
                            }

                            foreach ($_SESSION['sp'] as $item=>$value){
                                if ($value[0]==$id  and $value[1] != $bt){
                                    $check='ok';
                                }
                            }
                            foreach ($_SESSION['sp'] as $item=>$value){
                                if ($value[0] == $id && $value[1] == $bt){
                                    $_SESSION['sp'][$item][2] = $value[2]+1;
                                    $check='ko';
                                }
                            }

                            if ( $check=='ok'){
                                array_push( $_SESSION['sp'],$listsp);
                            }


                        }else{
                            $_SESSION['sp']=[$listsp];
                        }

                    }
                if (!empty($_SESSION['sp'])){


                ?>

                <table >

                    <tr>
                        <th colspan="col">STT</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col" class="text-center">Số lượng</th>
                        <th scope="col" class="text-right">Giá</th>
                        <th scope="col" class="text-right">Thành tiền</th>
                        <th> </th>
                    </tr>
                    <?php
                    $tong = 0;
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
                                   <td class='text-right'>
                                          <a href='index.php?act=xoa_sp&id=$item'><button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button></a>
                                   </td>                              
                         </tr>";
                            $tong+=$tien;
                        }
                    }

                    ?>

                    <tr>
                        <td>Phí Ship </td>
                        <td class="text-right"><?php echo 25000 ?> VND</td>
                    </tr>

                    <tr>

                        <td><strong>Thanh toán</strong></td>
                        <td class="text-right"><strong><?php echo $tong+25000 ?> VND</strong></td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="phuongthuc">
            <div class="thuchienpt">
                <div class="thuchienpt1">
                    <a href="index.php?act=san_pham" > <button class="btn btn-block btn-light">Tiếp tục mua hàng</button></a>
                </div>
                <div class="thuchienpt2">
                    <a href="index.php?act=hoa_don" ><button class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }else{
         echo "<h3 style='text-align: center;padding: 100px 0 100px 0'>Không có sản phẩm nào</h3>";
    }

?>
