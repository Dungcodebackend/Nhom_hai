<div class="boxtrai mr demo">
    <div class="boxtitle">Đăng nhập</div>
    <div class="boxcontent form-dn">
        <form action="index.php?act=dang_nhap" method="post">
            <div class="">
                Tên đăng nhập
                <input type="text" name="ten" placeholder="user" />

                    <?php
                    if ($i==1) {
                        echo "<p style='text-align: left;color: red'>Bạn chưa nhập tên đăng nhập</p>";
                    }
                    ?>
            </div>
            <div class="">
                Mật khẩu
                <input type="password" name="matkhau" placeholder="pass" />
                <?php
                if ($j==1) {
                    echo "<p style='text-align: left;color: red'>Bạn chưa nhập mật khẩu</p>";
                }
                ?>
            </div>
            <div class="" style="padding: 9px;">
                <input type="checkbox" name="" id="" />Ghi nhớ tài khoản
            </div>
            <?php
            if ($k==1) {
                echo "<p style='text-align: left;color: red'>Tên đăng nhập hoặc mật khẩu không đúng !</p>";
            }
            ?>

            <input type="submit" value="Đăng Nhập" name="dangnhap" />

        </form>
        <li style="list-style: none;">
            <a href="#">Quên mật khẩu?</a>
        </li>
        <li style="list-style: none;">
            <a href="index.php?act=dang_ky" >Đăng ký thành viên</a>
        </li>
    </div>
</div>
