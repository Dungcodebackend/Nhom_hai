<?php
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";

include "./view/client/header.php";

session_start();


if (isset($_GET['act'])){
    $act = $_GET['act'];
   switch ($act){
       case "san_pham":{
           if (isset($_POST['kyw'])&&$_POST['kyw']!=""){
               $kyw = $_POST['kyw'];
           }else{
               $kyw = "";
           }
           if (isset($_GET['iddm'])&&$_GET['iddm']>0){
               $iddm = $_GET['iddm'];

           }else{
               $iddm = 0;
           }

           $dssp=  loadall_sanpham($kyw,$iddm);

           include "./view/client/sanpham.php";
           break;
       }
       case "tin_tuc":{
           include "./view/client/tintuc.php";
           break;
       }
       case "lien_he":{
           include "./view/client/lienhe.php";
           break;
       }
       case "gio_hang":{
           include "./view/client/donhang.php";
           break;
       }
       case "dang_ky":{
           include "./view/client/dangky.php";
           break;
       }
       case "dang_nhap":{
           $i=0;
           $j=0;
           $k=0;
            if (isset($_POST['dangnhap'])){
                     $name = $_POST['ten'];
                     $pass = $_POST['matkhau'];

                    if (empty($name)){
                        $i=1;
                    }
                    if ($pass==""){
                        $j=1;
                    }
                    if (!($i==1)&&!($j==1)){
                        $tk = checkuser($name,$pass);
                        echo "<pre>";
                        print_r($tk);
                        echo "</pre>";
                        if(empty($tk)){
                            $k = 1;
                        }else{
                            if($tk[1]==1){
                                header("Location: ./view/admin/admin.php");
                                $_SESSION['admin'] = "admin";
                            }
                            if ($tk[1]==0){
                                echo "use";
                            }
                        }
                    }


            }
           include "./view/client/dangnhap.php";
           break;
       }
       default :{
           include "./view/client/home.php";
           break;
       }
   }
}else{
    include "./view/client/home.php";
}


include "./view/client/footer.php";