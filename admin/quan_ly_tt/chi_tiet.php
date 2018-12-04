<?php 
 ?>
 		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Danh sách thanh toán <?=$tour['ten_tour']?></h3>
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="alert-info alert" style="font-size: 13px" >
						<th>Mã TT</th>
						<th>Mã KH</th>
						<th>Tên KH</th>
						<th>Điện thoại</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Số vé</th>
						<th>Giá</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tt as $key => $value):
						extract($value); 
						?>
					<tr>
						<td><?=$ma_tt?></td>
						<td ><?=$ma_kh?></td>
						<td ><?=$ten_kh?></td>
						<td><?=$dien_thoai?></td>
						<td><?=$dia_chi?></td>
						<td><?=$email?></td>
						<td><?=$so_ve?></td>
						<td><?=number_format($gia)?> Đ</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
