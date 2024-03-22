<div class="box">
    <table class="styled-table" style="margin: 0">

        <thead>
        <tr>
            <th>STT</th>
            <th>Mã vận đơn</th>
            <th>Thời gian</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Trang thái</th>
            <th style="width: 50px"></th>
            <th style="width: 50px"></th>
        </tr>
        </thead>

        <tbody>
        <?php
        $list =loadall__hoadon();
        $i=0;
        foreach ($list as $ma){
            extract($ma);
            echo " <tr class='active-row'>
                             <td>$i</td>
                             <td>$maVanDon</td>
                              <td>$thoiGian</td>
                               <td>$soLuong</td>
                                <td>$tongTien</td>
                                <td>$trangThai</td>
                                <td style='width: 100px'><a href='admin.php?act=trang_thai&id=$id'><button >Cập nhật</button></a></td>
                                <td style='width: 100px'><a href='admin.php?act=chi_hoadon&id=$id'><button>Chi tiết</button></a></td>
                       </tr>";
            $i++;
        }
        ?>

        <!-- and so on... -->
        </tbody>
    </table>

</div>
