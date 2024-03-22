<?php
    if (isset($_SESSION['nguoi'])){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
        }else{
            $id=$_SESSION['nguoi']['id'];
        }

        $kh=load_khachhang($id);
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $soDienThoai = $_POST['soDienThoai'];
            $diaChi = $_POST['diaChi'];
            upload__users($id,$tenDangNhap,$matKhau,$ten, $email,$soDienThoai,$diaChi)

            ?>
            <div style="height: 10px"></div>
            <div style="height: 500px;background: #f1efef" >
                <div style="text-align: center;padding: 40px 0"><img src="./upload/thanhcong.webp" width="110px" height="110px"></div>
                <h3 style="font-weight: 600;font-size: 24px;text-align: center">Cập Nhật Tài Khoản Thành Công!</h3>
                <p style="font-size: 16px;text-align: center;color: #696464;padding-top: 10px">Vui lòng quay lại trang trủ để mua hang !</p>

                <div style="text-align: center;padding-top: 80px;padding-left: 42.5%"><a href="index.php" style="text-decoration: none"><p style="font-weight: 600;width: 150px;height: 40px;color:#e5fbfb;background:#59e34f;padding-top: 12px;border-radius: 4px">VỀ TRANG CHỦ</p></a></div>
            </div>
            <div style="height: 10px"></div>

            <?php
        }else{
?>

<div class="boxtrai mr demo">
    <div class="boxtitle">Cập Nhật Tài Khoản</div>
    <div class="boxcontent form-tk">
        <form action="index.php?act=cap_nhatuser" method="post">
            <input type="hidden" name="id"  value="<?php echo $kh['id'] ?>"/>
            <div class="row mb10">
                Họ và tên
                <input type="text" name="ten" placeholder="Họ và tên" value="<?php echo $kh['ten'] ?>" required/>
            </div>
            <div class="row mb10">
                Tên đăng nhập
                <input type="text" name="tenDangNhap" placeholder="Tên đăng nhập"  value="<?php echo $kh['tenDangNhap'] ?>" required/>
            </div>
            <div class="row mb10">
                Mật khẩu
                <input type="password" name="matKhau" placeholder="Mật Khẩu" value="<?php echo $kh['matKhau'] ?>" required />
            </div>
            <div class="row mb10">
                Email<br />
                <input type="email" name="email" placeholder="Email" value="<?php echo $kh['email'] ?>"   required />
            </div>
            <div class="row mb10" class="" style="padding-bottom: 10px;">
                Số điện thoại<br />
                <input type="number" name="soDienThoai" placeholder="Số điện thoại"  value="<?php echo $kh['soDienThoai'] ?>"   required style="width:100%;height:30px;padding-left:10px" />
            </div>
            <div class="row mb10" class="" style="padding-bottom: 10px;">
                Số điện thoại<br />
                <input type="text" name="diaChi" placeholder="Địa Chỉ"  value="<?php echo $kh['diaChi'] ?>"  required/>
            </div>
            <input  type="submit" value="Cập Nhật" name="dangky" />
            <input type="reset" value="Nhập lại" />
        </form>
    </div>
</div>
<?php
        }
    }
        ?>