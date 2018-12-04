<table class="table table-hover">
	<h3 class="alert alert-info"> Danh sách liên hệ</h3>
	<thead>
		<tr>
			<th>Tên</th>
			<th>Email</th>
			<th>Điện thoại</th>
			<th>Địa chỉ</th>
			<th>Tiêu đề</th>
			<th style="width: 300px" >Nội dung</th>
			<th>Thao tác</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($lienhe as $key => $value) :
			extract($value);
		?>
		<tr>
			<td><?=$ten?></td>
			<td><?=$email?></td>
			<td><?=$dien_thoai?></td>
			<td><?=$dia_chi?></td>
			<td><?=$tieu_de?></td>
			<td class="chitiet-tour"><p><?=$noi_dung?></p></td>
			<td> <a class="btn btn-danger" href="index.php?xoa&id=<?=$id?>">Xóa</a> </td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>