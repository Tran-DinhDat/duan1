
		
		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản lí thanh toán</h3>
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="alert-info alert" style="font-size: 13px" >
						<th>Mã tour</th>
						<th>Tên tour</th>
						<th>Hình</th>
						<th>Giá</th>
						<th>Số ngày</th>
						<th>Ngày khởi hành</th>
						<th>Tổng số vé</th>
						<th>Sô lượt thanh toán</th>
						<th>Số vé đã đặt</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tour as $key => $value):
						extract($value); 
						$sltt=so_luot_thanh_toan($ma_tour);
						?>
					<tr>
						<td><?=$ma_tour?></td>
						<td class="ten_tour" width="250px"><?=$ten_tour?></td>
						<td ><img style="width: 150px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>"></td>
						<td class="gia_tour" width="100px"><?php echo number_format($gia) ?> đ</td> 
						<td><?php echo $so_ngay?></td> 
						<td><?=$ngay_khoi_hanh?></td>
						<td><?=$tong_so_ve?></td>
						<td style="color: red" ><?=$sltt["COUNT(ma_tour)"]?></td>
						<td style="color: red" ><?=$so_ve_da_dat?></td>
						<td> <a class="btn btn-info" href="index.php?chi_tiet&ma_tour=<?=$ma_tour?>"> Chi tiết </a></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>

		
			
		







