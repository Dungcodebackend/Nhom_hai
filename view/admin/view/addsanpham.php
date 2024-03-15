<style>
    /* Style inputs with type="text", select elements and textareas */
    input[type=text], select, textarea {
        width: 100%; /* Full width */
        padding: 12px; /* Some padding */
        border: 1px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Add a background color and some padding around the form */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    .input_container {
        margin-top: 10px;
        border: 1px solid #ffffff;
    }

    input[type=file]::file-selector-button {
        background-color: #fff;
        color: #000;
        border: 0px;
        border-right: 1px solid #e5e5e5;
        padding: 10px 15px;
        margin-right: 20px;
        transition: .5s;
    }

    input[type=file]::file-selector-button:hover {
        background-color: #eee;
        border: 0px;
        border-right: 1px solid #e5e5e5;
    }
</style>

<div class="container">
    <?php

    if (isset($_POST['Submit'])) {
        $ten = $_POST['ten'];
        $ma =  strtoupper($_POST['ma']);
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $anh = $_FILES['anh']['name'];
        $danhmuc = $_POST['danhmuc'];
        $chitiet = $_POST['chitiet'];
        $sp = [$ten, $gia, $soluong, $chitiet, $anh, $danhmuc, $ma];


        $anh1 = $_FILES['anh1']['name'];
        $anh2 = $_FILES['anh2']['name'];
        $btanh = [$anh1, $anh2];

        $tenbienthe = $_POST['tenbienthe'];
        $bienthe1 = $_POST['bienthe1'];
        $bienthe2 = $_POST['bienthe2'];
        $bienthe3 = $_POST['bienthe3'];
        $bienthe = [$tenbienthe, $bienthe1, $bienthe2, $bienthe3];

        $thanhcong=1;


        $ckma= load_ma($_POST['ma']);

        if ($ckma==0){
            $thanhcong=0;
        }

        $gia = (int)$gia;
        $soluong = (int)$soluong;
        if ($gia==0){
            $loigia = "Vui lòng nhập số nguyên dương";
            $thanhcong=0;

        }else{
            $loigia =0;
        }
        if ($soluong==0 || $soluong < 0){
            $loisl =   "Vui lòng nhập số nguyên dương hoặc lớn hơn 0 ";
            $thanhcong=0;

        }else{
            $loisl =0;
        }

        $target_file =  basename($_FILES["anh"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $duoifile = array("jpg","png","jpeg","gif");
        if (in_array($imageFileType,$duoifile)){
            if ($loigia==0&&$loisl==0){
                move_uploaded_file($_FILES["anh"]["tmp_name"], "../../upload/".$target_file);
            }
            $ddfile=1;
        }else{
            $thanhcong=0;
            $ddfile=0;
        }


        $target_file1 =  basename($_FILES["anh1"]["name"]);
        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        if ($anh1!=""){
                if (in_array($imageFileType1,$duoifile)){
                    if ($loigia==0&&$loisl==0){
                    move_uploaded_file($_FILES["anh1"]["tmp_name"], "../../upload/".$target_file1);
                    }
                    $ddfile=1;
                }else{
                    $thanhcong=0;
                    $ddfile=0;
                }
        }

        $target_file2 =  basename($_FILES["anh2"]["name"]);
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        if ($anh2!=""){
                if (in_array($imageFileType2,$duoifile)){
                    if ($loigia==0&&$loisl==0){
                      move_uploaded_file($_FILES["anh2"]["tmp_name"], "../../upload/".$target_file2);
                    }
                    $ddfile=1;
                 }else{
                    $thanhcong=0;
                    $ddfile=0;
                }
        }
        $erorr = array ($loigia,$loisl,$ddfile);

        if ($thanhcong==1){
            $sp1 = add__sanpham($sp,$btanh,$bienthe);
            $ok = "Thêm sản phẩm thành công";
            echo "<h3 style='color: #57e857'>$ok</h3>";
            echo header("refresh: 2,url = http://localhost/DuAnMot/Nhom_hai/view/admin/admin.php?act=san_pham");
            exit();

        }else{
            $ok = "Thêm sản phẩm thất bại";
            echo "<h3 style='color: #f15151'>$ok</h3>";
        }


    }
    ?>
    <form action="admin.php?act=add_sanpham" method="post" enctype="multipart/form-data">

        <label for="fname">Tên Sản Phẩm</label>
        <input type="text" id="fname" name="ten" placeholder="Tên sản phẩm.." required>

        <label for="fname">Mã Sản Phẩm</label>
        <input type="text" id="fname" name="ma" placeholder="Mã sản phẩm.." required>
        <?php
        if (isset($_POST['Submit'])) {
            if ($ckma == 0)
                echo "<p style='text-align: left;color: red'>Mã sản phẩm đã tồn tại !</p>";
        }
        ?>
        <label for="lname">Giá</label>
        <input type="text" id="lname" name="gia" placeholder="Giá bán.." required>
        <?php
        if (isset($_POST['Submit'])) {
            if ($erorr[0] != 0)
                echo "<p style='text-align: left;color: red'>$erorr[0]</p>";
        }
        ?>
        <label for="lname">Số Lượng</label>
        <input type="text" id="lname" name="soluong" placeholder="Số lượng.." required>
        <?php
        if (isset($_POST['Submit'])) {
            if ($erorr[1] != 0)
                echo "<p style='text-align: left;color: red'>$erorr[1]</p>";
        }
        ?>


        <label for="lname">Ảnh Chính</label>
        <div class="input_container">
            <input type="file" id="fileUpload" name="anh" required>
        </div>
        <?php
        if (isset($_POST['Submit'])) {
            if ($erorr[2] == 0)
                echo "<p style='text-align: left;color: red'>Định dạng file không đúng !</p>";
        }
        ?>
        <p></p>
        <label for="lname">Ảnh Phụ 1</label>
        <div class="input_container">
            <input type="file" id="fileUpload" name="anh1">
        </div>
        <p></p>
        <label for="lname">Ảnh Phụ 2</label>
        <div class="input_container">
            <input type="file" id="fileUpload" name="anh2"
        </div>
        <p></p>

        <label for="lname">Tên Biến Thể </label>
        <input type="text" id="lname" name="tenbienthe" placeholder="Tên biến thể ..">

        <label for="lname">Biến Thể 1</label>
        <input type="text" id="lname" name="bienthe1" placeholder="Biến thể 1..">

        <label for="lname">Biến Thể 2</label>
        <input type="text" id="lname" name="bienthe2" placeholder="Biến thể 2..">

        <label for="lname">Biến Thể 3</label>
        <input type="text" id="lname" name="bienthe3" placeholder="Biến thể 3..">

        <label for="country">Danh mục</label>
        <select id="country" name="danhmuc">
            <?php
            $dm= loadall__danhmuc();
              foreach ($dm as $danhmuc){
                  extract($danhmuc);
                  echo " <option value='$danhmuc[id]'>$danhmuc[tenLoai]</option>";
              }
            ?>
        </select>

        <label for="subject">Chi Tiết Sản Phẩm</label>
        <textarea id="subject" name="chitiet" placeholder="Chi Tiết Sản Phẩm.." style="height:200px"></textarea>

        <input type="submit" value="Submit" name="Submit">

    </form>
</div>

