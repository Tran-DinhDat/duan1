
		
		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản trị khu vực tour</h3>
			<h4 class="alert alert-danger" > Lưu ý: Khi xóa 1 khu vực bất kì, bạn sẽ xóa những dữ liệu liên quan, bao gồm các tour trong khu vực, nôi dung bình luận và lịch sử thanh toán của các tour liên quan</h4>
			<table class="table table-hover table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Mã khu vực</th>
						<th>Tên khu vực</th>
						<th>Hình</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($kvt as $key => $value):
						extract($value); ?>
					<tr class="tr-kvt">
						<td style="font-weight: bold; "><?php echo $value["ma_kvt"] ?></td> 
						<td><?php echo $value["ten_kvt"] ?></td> 
						<td><img class="img-responsive img-thumbnail" style="height: 70px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/products/<?=$hinh?>"></td>
						<td>
							<a class="btn btn-danger" href="index.php?delete&ma_kvt=<?=$value['ma_kvt']?>">Delete</a>
							<a class="btn btn-info" href="index.php?edit&ma_kvt=<?=$value['ma_kvt']?>">Edit</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a class="btn-success btn" href="index.php?new" class="btn btn-default"> Thêm mới</a>
		
			
		
