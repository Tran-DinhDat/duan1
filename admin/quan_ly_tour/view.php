
		
		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản trị tour</h3>
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="alert-info alert" style="font-size: 13px" >
						<th>Mã tour</th>
						<th>Tên tour</th>
						<th>Hình</th>
						<th>Mã KV</th>
						<th>Giá</th>
						<th>Số ngày</th>
						<th>Lượt xem</th>
						<th>Yêu thích</th>
						<th>Ngày khởi hành</th>
						<th>Chi tiết</th>
						<th>Thao tác</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($tour as $key => $value):
						extract($value); ?>
					<tr>
						<td width="70px"><?php echo $value["ma_tour"] ?></td> 
						<td width="150px"><?php echo $value["ten_tour"] ?></td> 
						<td ><img style="width: 250px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>"></td>
						<td><?php echo $value["ma_kvt"] ?></td> 
						<td width="100px"><?php echo number_format($value["gia"]) ?> đ</td> 
						<td><?php echo $value["so_ngay"] ?></td> 
						<td><?php echo $value["so_luot_xem"] ?></td> 
						<td><?php echo $value["so_luot_yeu_thich"] ?></td> 
						<td width="120px"> <?php echo $value["ngay_khoi_hanh"] ?></td> 
						<td class="chitiet-tour"><p><?php echo $value["chi_tiet"] ?></p></td> 

						<td width="150px">
							<a class="btn btn-info" href="index.php?edit&ma_tour=<?=$value['ma_tour']?>">Edit</a>
							<a class="btn btn-danger" href="index.php?delete&ma_tour=<?=$value['ma_tour']?>">Delete</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a href="index.php?them" class="btn btn-info"> Thêm mới</a>

		
			
		







