<?php
session_start();
include "../../model/pdo.php";
include "../../model/sanpham.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";
include "../../model/giohang.php";
include "../../model/binhluan.php";
include "../../model/tongquan.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_SESSION['admin']) && $_SESSION['admin']=='admin'){
include "view/header.php";

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case "san_pham":{
                include "./view/sanpham.php";
                break;
            }
            case "danh_muc":{
                include "./view/danhmuc.php";
                break;
            }
            case "add_sanpham":{
                include "./view/addsanpham.php";
                break;
            }
            case "updata_sanpham":{
                include "./view/updatesanpham.php";
                break;
            }
            case "xoa_sanpham":{
                if (isset($_GET['xoa'])){
                    $id = $_GET['xoa'];
                    delete__sanpham($id);
                    echo "<h3 style='color: #57e857;padding-left: 400px'>Xóa sản phẩm thành công</h3>";
                    echo header("refresh: 2,url = http://localhost/DuAnMot/Nhom_hai/view/admin/admin.php?act=san_pham");
                    exit();
                }

                break;
            }
            case "khach_hang":{
                include "./view/khachhang.php";
                break;
            }
            case "binh_luan":{
                include "./view/binhluan.php";
                break;
            }case "upload_binhluan":{
                    include "./view/uploadbl.php";
                break;
            }
            case "delete_binhluan":{
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete__bl($id);
                }
                include "./view/binhluan.php";
                break;
            }
            case "hoa_don":{
                include "./view/hoadon.php";
                break;
            }
            case "trang_thai":{
                include "./view/trangthai.php";
                break;
            }
            case "chi_hoadon":{
                include "./view/chitiethoadon.php";
                break;
            }
            default :{
                include "./view/tongquan.php";
                break;
            }
        }
    }else{
        include "./view/tongquan.php";
    }

include "view/footer.php";
}else{
    header("Location: ../error/404.html");
}
