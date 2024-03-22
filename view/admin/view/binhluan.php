
<div class="box">
    <table class="styled-table" style="margin: 0">

        <thead>
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Họ và tên</th>
            <th>Thời gian</th>
            <th>Nội dung</th>

            <th style="width: 50px"></th>
            <th style="width: 50px"></th>
        </tr>
        </thead>

        <tbody>
        <?php
        $list =loadall__bl();
        $i=0;
        foreach ($list as $bl){
            extract($bl);
            echo " <tr class='active-row'>
                             <td>$i</td>       
                             <td>$ma</td>       
                              <td>$ten</td>
                               <td>$thoiGian</td>
                                <td>$noiDung</td>
                                <td style='width: 100px'><a href='admin.php?act=upload_binhluan&id=$id'><button >Chỉnh sửa</button></a></td>
                               <td style='width: 100px'><a href='admin.php?act=delete_binhluan&id=$id'><button>Xóa</button></a></td>                       
                       </tr>";
            $i++;
        }
        ?>

        <!-- and so on... -->
        </tbody>
    </table>

</div>
