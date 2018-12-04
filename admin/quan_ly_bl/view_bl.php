
		
		<form action="" method="POST" role="form">
			<h3 class="alert-info alert">Quản lý bình luận</h3>
			<table class="table table-hover">
				<thead class="alert-info alert">
					<tr>
						<th>Mã Bình Luận</th>
						<th>Mã khách Hang</th>
						<th>Mã Tour</th>
						<th>Nội Dung</th>
						<th>Ngày Bình Luận</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($select_binh_luan as $key => $value):
						extract($value); ?>
					<tr>
						<td><?php echo $value["ma_bl"] ?></td> 
						<td><?php echo $value["ma_kh"] ?></td> 
					
						<td><?php echo $value["ma_tour"] ?></td> 
							<td><?php echo $value["noi_dung"] ?></td>
							<td><?php echo $value["ngay_bl"] ?></td>
						<td>
							 
							<a class="btn btn-danger" href="index.php?delete&ma_bl=<?=$value['ma_bl']?>">Delete</a>
							
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a class="btn btn-danger" href="index.php">Quay lại</a>
	

		
			
		
