<!DOCTYPE html>
<html>
    <body>
        <div class=" alert alert-info ">
            <h3>Thống kê hàng hóa từng loại</h3>
        </div>
        <table class="table table-hover">
            <thead class="alert-info alert">
                <tr>
                    <th>Loại hàng</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_kvt?></td>
                    <td><?=$so_luong?></td>
                    <td><?=number_format($gia_min,0)?> đ</td>
                    <td><?=number_format($gia_max,0)?> đ</td>
                    <td><?=number_format($gia_avg,0)?> đ</td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <a class="btn-info btn" href="index.php?chart">Xem biểu đồ</a>
    </body>
</html>