<?php
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./model/giohang.php";

session_start();
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

include "./view/client/header.php";



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
       case "chi_tiet":{
           include "./view/client/chitietsp.php";
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

           include "./view/client/gioihang.php";
           break;
       }
       case "xoa_sp":{
            if (isset($_GET['id'])){
                $id=$_GET['id'];
                unset($_SESSION['sp'][$id]);
                header('Location: index.php?act=gio_hang');
            }else{
                header("Location: ./view/error/404.html");
            }

           break;
       }
       case "hoa_don":{

           include "./view/client/hoadon.php";
           break;
       }
       case "bien_the":{

           include "./view/client/bienthe.php";
           break;
       }

       case "dang_ky":{
           include "./view/client/dangky.php";
           break;
       }
       case "dang_xuat":{
           unset($_SESSION['nguoi']);
           unset($_SESSION['sp']);
           header("Location: index.php");
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
                        if(empty($tk)){
                            $k = 1;
                        }else{
                            if($tk[1]==1){

                                header("Location: ./view/admin/admin.php");
                                $_SESSION['admin'] = "admin";
                            }
                            if ($tk[1]==0){

                                $_SESSION['nguoi'] = $tk[0];
                                header("Location: index.php");

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