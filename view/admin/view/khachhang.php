<div class="box">
    <table class="styled-table" style="margin: 0">

        <thead>
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Số điện thoai</th>
            <th>Địa Chỉ</th>

            <th style="width: 50px"></th>
            <th style="width: 50px"></th>
        </tr>
        </thead>

        <tbody>
        <?php
        $list =loadall_khachhang();
        $i=0;
        foreach ($list as $ma){
            extract($ma);
            echo " <tr class='active-row'>
                             <td>$i</td>       
                              <td>$ten</td>
                               <td>$email</td>
                                <td>$soDienThoai</td>
                                <td>$diaChi</td>
                              
                       </tr>";
            $i++;
        }
        ?>

        <!-- and so on... -->
        </tbody>
    </table>

</div>
