<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $tenLoai = $_POST['tenLoai'];
    add__danhmuc($tenLoai);
}
 if (isset($_GET['id'])){
     delete__danhmuc($_GET['id']);
 }
?>

<div class="box" style="display: flex;justify-content: space-around;">
    <table class="styled-table" style="margin: 0">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th style="width: 50px"></th>
        </tr>
        </thead>

        <tbody>
        <?php
        $list =loadall__danhmuc();
        $i=0;
        foreach ($list as $ma){
            extract($ma);
            echo " <tr class='active-row'>
                             <td>$i</td>
                             <td>$tenLoai</td>                         
                                <td style='width: 100px'><a href='admin.php?act=danh_muc&id=$id'><button>Xóa</button></a></td>
                       </tr>";
            $i++;
        }
        ?>

        <!-- and so on... -->
        </tbody>
    </table>
    <form action="admin.php?act=danh_muc" method="post" style="padding-top: 40px">
        <p>Thêm danh mục mới</p>
        <input type="text" name="tenLoai" value="" required placeholder="Tên danh mục" style="width: 300px;height: 30px">
        <input type="submit" value="Thêm" style="width: 100px;height: 35px">
    </form>
</div>

