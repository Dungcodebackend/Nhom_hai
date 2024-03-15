<div class="box">
    <div class="button__new">
        <a href="admin.php?act=add_sanpham" style="text-decoration: none"><div class="new"> + THÊM SẢN PHẨM</div></a>
    </div>
    <table class="styled-table">

        <thead>
        <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Số Lượng Còn Lại</th>
            <th style="width: 50px"></th>
            <th style="width: 50px"></th>
        </tr>
        </thead>

        <tbody>
        <?php
            $list =loadall__sanpham();
            $i=0;
            foreach ($list as $ma){
                extract($ma);
                echo " <tr class='active-row'>
                             <td>$i</td>
                             <td><img src='../../upload/$anh'/ width='100px' height='100px' ></td>
                              <td>$ma</td>
                               <td>$tenSp</td>
                                <td>$gia</td>
                                <td>$soLuongConLai</td>
                                <td style='width: 50px'><a href='admin.php?act=updata_sanpham&id=$id'><button >Sửa</button></a></td>
                                <td style='width: 50px'><a href='admin.php?act=xoa_sanpham&xoa=$id'><button onclick='xao()' >Xóa</button></a></td>
                       </tr>";
                $i++;
            }
        ?>

        <!-- and so on... -->
        </tbody>
    </table>

</div>
<script>
    function xao(){
        confirm("Bạn muốn xóa sản phẩm này !");
    }
</script>
