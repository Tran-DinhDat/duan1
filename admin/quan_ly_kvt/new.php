<form action="index.php" method="POST"  enctype="multipart/form-data">
	<h3 class="alert-info alert">Quản lý khu vực</h3>

	<div class="form-group">
		<label for="">Mã khu vực</label>
		<input type="text" class="form-control" id="" name="ma_kvt" placeholder="Auto number" readonly="">
	</div>
	<div class="form-group">
		<label for="">Tên khu vực</label>
		<input type="text" class="form-control" id="" name="ten_kvt" placeholder="Nhập tên khu vực" required="">
	</div>
	<div class="form-group">
		<label>Hình</label>
		<input name="hinh" type="file" class="form-control" required="">
	</div>
	<button name="them" class="btn btn-success">Thêm mới</button>
	<a href="index.php?view" class="btn btn-info">Danh sách KVT</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->