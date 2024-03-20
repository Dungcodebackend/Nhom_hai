<?php
 if (isset($_GET['id']) && $_GET['id']){
     $id=$_GET['id'];
     $sp = load__sanpham($id);
     $anhsp = load__anhsp($id);
     $bienthesp = load__bienthesp($id);
?>
<section class="spchitiet">
    <div class="spInfo-Img">
        <div class="a">
            <img id="aa" src="./upload/<?php echo $sp[0][5] ?>" width="100%" height="100%">
        </div>
        <?php if(!empty($anhsp[0][1])) {?>
        <div id="a" class="b">
            <button onclick="document.getElementById('aa').src='./upload/<?php echo $anhsp[0][1];?>'"><img src="./upload/<?php echo $anhsp[0][1];?>" width="100%" height="100%"></button>
        </div>
        <?php }
         if(!empty($anhsp[0][2])) {?>
        <div id="a" class="c">
            <button onclick="document.getElementById('aa').src='./upload/<?php echo $anhsp[0][2];?>'"><img src="./upload/<?php echo $anhsp[0][2];?>" width="100%" height="100%"></button>
        </div>
        <?php }?>
    </div>
    <div class="spInfo-Text">
        <div class="text">
            <div id="top">
<!--                <p style="font-size: 80%;font-family: sans-serif;color: gray;font-weight: bold;">Đánh giá</p>-->
<!--                <div class="sao">-->
<!--                    <button onclick="document.getElementById('ss').value=1;sao()" id="s1"><i  class="far fa-star"></i></button>-->
<!--                    <button onclick="document.getElementById('ss').value=2;sao()" id="s2"><i class="far fa-star"></i></button>-->
<!--                    <button onclick="document.getElementById('ss').value=3;sao()" id="s3"><i class="far fa-star"></i></button>-->
<!--                    <button onclick="document.getElementById('ss').value=4;sao()" id="s4"><i class="far fa-star"></i></button>-->
<!--                    <button onclick="document.getElementById('ss').value=5;sao()" id="s5"><i class="far fa-star"></i></button>-->
<!--                    <input id="ss" type="text" value="0" disabled>-->
<!--                </div>-->
                <div class="title">
                    <form action="index.php?act=gio_hang" method="post">
                    <h3>Tên sản phẩm : <?php echo $sp[0][1]?></h3>
                    <p>Mã sản phẩm : <?php echo $sp[0][9]  ?></p>
                    <p><?php echo $bienthesp[0][1] ?> : </p>

                    <div style="display: flex">
                    <?php
                        if (!empty($bienthesp[0][2])){
                            ?>
                            <p><input type="radio" name="bt" value="<?php echo $bienthesp[0][2] ?>"><?php echo $bienthesp[0][2] ?></p>
                             <?php
                           }
                    ?>
                    <?php
                    if (!empty($bienthesp[0][3])){
                        ?>
                        <p><input type="radio" name="bt" value="<?php echo $bienthesp[0][3] ?>"><?php echo $bienthesp[0][3] ?></p>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty($bienthesp[0][4])){
                        ?>
                       <p><input type="radio" name="bt" value="<?php echo $bienthesp[0][4] ?>"><?php echo $bienthesp[0][4] ?></p>
                        <?php
                    }
                    ?>
                    </div>





                    <span><?php echo $sp[0][2]?> VND</span>
                    <br>

                    <input class="ip" type="button" value="+" onclick="incrementValue()">
                    <input id="quantity" class="ip" value="1" name="soLuong" type="number" style="width: 50px; text-align: center;">
                    <input class="ip" type="button" value="-" onclick="decrementValue()"> <br>
                    <input type="hidden" name="id" value="<?php  echo $sp[0][0] ?>">
                    <p></p>
                    <a href="index.php?act=bien_the&id=<?php echo $sp[0][0] ?>"><input class="tvgh" type="button" value="Thêm vào giỏ"></a>
                    <input class="tvgh" type="submit" name="ok" value="Mua ngay" onclick="checkMua()">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<main class="mucdanhgia">
    <section class="danhgia">

        <div class=" mb">
            <div class="boxtitle">Mô tả</div>
            <div class="boxcontent">
                <p class="mota">Đặc điểm sản phẩm: <?php echo $sp[0][1] ?> <br>
                    <?php echo $sp[0][4] ?>
                </p>
            </div>
        </div>
        <div class="">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent  product_portfolio binhluan ">
                <table>
                    <tr>
                        <td>Sản phẩm quá đẹp</td>
                        <td> Nguyễn Tuấn Anh</td>
                        <td> 08/03/2024</td>
                    </tr>
                    <tr>
                        <td>Sản phẩm quá đẹp</td>
                        <td> Nguyễn Thành A</td>
                        <td> 20/10/2022</td>
                    </tr>
                </table>
            </div>
            <div class="searchbox">
                <form action="" method="POST">
                    <input type="hidden" name="idpro" value="">
                    <input type="text" name="noidung"  >
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="boxcontent">
                <li><a href="">Sản phẩm 1</a></li>
                <li><a href="">Sản phẩm 1</a></li>
                <li><a href="">Sản phẩm 1</a></li>
                <li><a href="">Sản phẩm 1</a></li>
                <li><a href="">Sản phẩm 1</a></li>
            </div>
        </div>

    </section>
    <section class="dmproduce">
        <div class="boxtitle">Danh mục sản phẩm</div>
        <div class="boxcontent2">
            <div class="listproduce">
                <a href="#" class="list-group-item">Đèn LED gắn nổi</a>
                <a href="#" class="list-group-item">Đèn LED ốp trần</a>
                <a href="#" class="list-group-item">Đèn LED treo trần</a>
                <a href="#" class="list-group-item">Đèn LED pha</a>
            </div>
        </div>
    </section>
</main>
<script src="./view/js/chitiet.js"></script>
<?php
 }else{
     header('Location: ./view/error/404.html');
 }