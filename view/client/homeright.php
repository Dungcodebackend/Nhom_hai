<section class="dmproduce">
    <div class="boxtitle">Danh mục sản phẩm</div>
    <div class="boxcontent2">
        <div class="listproduce">
            <?php

            $listloai = loadall_danhmuc();
            foreach ($listloai as $loai){
                extract($loai);
                ?>
                <a href="index.php?act=san_pham&iddm=<?php echo $loai['id'] ?>" class="list-group-item"><?php echo $loai['tenLoai'] ?></a>
            <?php

            }
            ?>

        </div>
    </div>
</section>
