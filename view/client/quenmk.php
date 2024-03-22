
<div class="boxtrai mr demo">
                <div class="boxtitle">Quên mật khẩu</div>
                <div class="boxcontent form-tk">
                  <form action="index.php?act=quen_mk" method="post">
                      <div class="row mb10">
                         Nhập Email<br />
                        <input type="email" name="email" placeholder="email" required />
                      </div>
                    <input  type="submit" value="Gửi" name="gui" />
                  </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD']=="POST"){
                        $email = $_POST['email'];

                        $tk=quen_mk($email);
                        $to      = $email;
                        $subject = "Mật khẩu ";
                        $message = "Mật khẩu tài khoản của bạn là : ". $tk['matKhau'];
                        $header  =  "From:quangdung19062004@gmail.com \r\n";

                        $success = mail($to,$subject,$message,$header);

                        if( $success == true )
                        {
                            echo "Đã gửi mail thành công...";
                        }
                        else
                        {
                            echo "Không gửi đi được...";
                        }
                    }
                    ?>
                </div>
</div>