<h2 style="margin:0;text-align: center;padding-top: 20px">THÔNG KÊ</h2>

<div id="chartContainer" style="height: 300px; width: 95%;padding:30px 10px"></div>
<div style="display: flex;justify-content: space-around;">
<div style="padding-top: 50px">
    <h3>Số lượng khách hàng</h3>
    <div style="padding:20px;width: 150px;height: 40px;border:2px double black;font-size: 28px;font-weight: 600">
       <?php  $ng=tongquan_tongkh(); echo $ng[0][0] ?> Người
    </div>
</div>
<div style="padding-top: 50px">
    <h3>Số sản phẩm</h3>
    <div style="padding:20px;width: 150px;height: 40px;border:2px double black;font-size: 28px;font-weight: 600">
        <?php  $tong=  tongquan_tongsp(); echo $tong[0][0] ?> Người
    </div>
</div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Số Lượng sản phẩm theo mục"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                    <?php
                    $tq= tongquan_sp();
                    $tong=  tongquan_tongsp();
                     foreach ($tq as $sp){
                         extract($sp);
                         $ten = tongquan_tendm($id);
                         echo" {y:".(($soluong/$tong[0][0])*100).", label:'".$ten[0][1]."'},";
                     }
                    ?>

                ]
            }]
        });
        chart.render();
    }
</script>
<?php

?>