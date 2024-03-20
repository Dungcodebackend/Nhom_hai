<div style="height: 5px"></div>
<main class="introducesp">
    <h1>Sản phẩm </h1>
    <?php
        include './view/client/homeright.php';
    ?>
    <section class="mucsp" >
        <section class="producebuy">
            <?php

                foreach ($dssp as $sanpham){
                    ?>
                    <section class="produce1">
                        <div><img src="upload/<?php echo $sanpham['anh'] ?>" alt="" style="height: 200px"></div>
                        <h3 style="padding: 10px 0px 8px 0px;color: red;text-align: left">Tên sản phẩm :</h3>
                        <h4><?php echo $sanpham['tenSp'] ?></h4>
                        <h3 style="padding: 10px 0px 10px 0px;color: red;text-align: left">Giá :</h3>
                        <p class="price" style="padding: 8px 0px 12px 0px"><?php echo $sanpham['gia'] ?> VND</p>

                        <a href="index.php?act=bien_the&id=<?php echo $sanpham['id'] ?>"><input type="submit" value="Thêm vào giỏ"></a>
                        <a href=""><input type="submit" value="Mua"></a>

                    </section>
                        <?php
                }

                       ?>

        </section>
        <?php
        if (empty($dssp)){
            echo "<h3 style='text-align: center'''>Không tìm thấy sản phẩm</h3>";
        }
        ?>

        <style>

        </style>
    </section>


    <section class="trang" style="padding-bottom:30px ">
        <div><a href="#">1</a></div>
        <div><a href="#">2</a></div>
        <div><a href="#">3</a></div>
        <div><a href="#">4</a></div>

    </section>

</main>