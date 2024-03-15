
        <section class="banner">
            <img src="upload/banner.png" alt="">
            <div >
                <p>Sản phẩm chất lượng <br>
                    hàng đầu Việt Nam với<br> những
                    sản phẩm bát mắt,<br>
                    độ bền bỉ qua hàng năm.</p>
                <input type="submit" value="Tìm kiếm">
            </div>
        </section>
    </header>
    <main class="introduce">
        <h1>ĐÈN LED VIET NAM</h1>
        <section class="detail1">
            <img src="upload/1.png" alt="">
            <p> + Cửa hàng được phát triển từ một cửa hàng thương mại,
                xưởng sản xuất nhỏ. Nhưng với tinh thần làm việc nghiêm túc
                và với mục tiêu rõ ràng. Ban lãnh đạo công ty cùng toàn thể
                cán bộ công nhân viênh đã vững bước tiến lên trở thành một
                đơn vị cung cấp thiết bị chiếu sáng uy tín và lớn mạnh.</p>
        </section>

        <section class="detail2">
            <p> + TẦM NHÌN <br>
                Trở thành nhãn hiệu đèn led hàng đầu Việt Nam với công nghệ sản xuất tiên tiến; đem lại những sản phẩm tiết kiệm năng lượng và thân thiện với môi trường để phục vụ mọi nhu cầu khách hàng.<br>
                + SỨ MỆNH <br>
                Tiếp tục nghiên cứu và mang đến hệ thống sản phẩm thân thiện với môi trường thông qua các dự án,
                OEM và kênh bán lẻ; giúp tăng trưởng lợi nhuận và phát triển bền vững.</p>
            <img src="upload/3.png" alt="">

        </section>
        <h1>Sản phẩm tiêu biểu</h1>
        <section class="producetop">


            <?php
            $test =load_top3();
            foreach ($test as $sanpham){
                extract($sanpham);
                ?>
                <section class="produce1">
                    <div><img src="upload/<?php echo $sanpham['anh']  ?>" alt="Anh san pham" style="width: 287px;height: 300px"></div>
                    <h3 style="padding: 10px 0px 8px 0px;color: red;text-align: left">Tên sản phẩm :</h3>
                    <h4><?php echo $sanpham['tenSp'] ?></h4>
                    <h3 style="padding: 10px 0px 10px 0px;color: red;text-align: left">Giá :</h3>
                    <p class="price" style="padding: 8px 0px 12px 0px"><?php echo $sanpham['gia'] ?> VND</p>
                    <a href=""><input type="submit" value="Xem thêm" ></a>
                </section>
            <?php
            }
            ?>
<!--            <section class="produce1">-->
<!--                <div><img src="upload/11.png" alt=""></div>-->
<!--                <h4>Đèn LED dây LED28352204</h4>-->
<!--                <p>Mã sản phẩm: LED28352204</p>-->
<!--                <p>Công suất: 4.5W     </p>-->
<!--                <p>Tuổi thọ: 30000 giờ</p>-->
<!--                <p class="price">22222</p>-->
<!--                <a href=""><input type="submit" value="Xem thêm"></a>-->
<!--            </section>-->
<!---->

        </section>

        <h1>Chứng nhận</h1>
        <section class="chungnhan">
            <div><img src="upload/4.png" alt=""></div>
            <div><img src="upload/5.png" alt=""></div>
            <div><img src="upload/6.png" alt=""></div>
            <div><img src="upload/7.png" alt=""></div>
            <div><img src="upload/8.png" alt=""></div>
        </section>
    </main>

