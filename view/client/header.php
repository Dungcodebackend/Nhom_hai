<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <title>QUANGANHLED</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
<section class="container" style="padding: 0">
    <header>
        <section class="maintitle" style="padding: 35px">
            <div class="thonghieu">
                <img src="upload/9.png" alt="">
                <p>QUANGANHLED</p>
            </div>
            <div class="choice">

                <a href="index.php?act=gio_hang"><i class="fas fa-shopping-cart"></i></a>
                <ul>
                    <li><a href="index.php?act=dang_ky">Đăng ký </a></li>|
                    <li><a href="index.php?act=dang_nhap">Đăng nhập</a></li>
                </ul>
                <a href="index.php?act=dang_nhap"><i class="fas fa-user"></i></a>

            </div>
        </section>
        <section class="bodermenu" >
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ </a></li>
                    <li><a href="index.php?act=san_pham">Sản phẩm</a></li>
                    <li><a href="index.php?act=tin_tuc">Tin tức</a></li>
                    <li><a href="index.php?act=lien_he">Liên hệ</a></li>
                </ul>
                <form class="search" action="index.php?act=san_pham" method="post">
                    <input type="text" class="searchinput" placeholder="Tìm kiếm.." name="kyw" required>
                    <button class="searchbutton" type="submit"><i class="fa fa-search"></i></button>
                </form>

            </nav>
        </section>