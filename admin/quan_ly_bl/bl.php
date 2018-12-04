		
		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản lí bình luận</h3>
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="alert-info alert" style="font-size: 13px" >
						<th>Mã tour</th>
						<th>Tên tour</th>
						<th>Hình</th>
						<th>Giá</th>
						<td>Sô bình luận</td>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tour as $key => $value):
						extract($value);
						$bl=so_bl($ma_tour);
						?>
					<tr>
						<td width="80px"><?=$ma_tour?></td>
						<td class="ten_tour" width="300px"><?=$ten_tour?></td>
						<td width="200px"><img style="width: 200px; margin: 0 auto;" class="img-responsive" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>"></td>
						<td class="gia_tour" width="100px"><?php echo number_format($gia) ?> đ</td> 
						<td><?=$bl["COUNT(ma_tour)"]?></td>
						<td> <a class="btn btn-info" href="index.php?chi_tiet&ma_tour=<?=$ma_tour?>"> Chi tiết </a></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
