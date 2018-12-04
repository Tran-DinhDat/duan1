

<form action="index.php" method="POST"  enctype="multipart/form-data">
	<h3 class="alert-info alert">Thêm khách hàng</h3>

	<div class="form-group">
		<label for="">Mã khách hàng</label>
		<input  type="text" class="form-control" id="" name="ma_kh" placeholder="Auto number" readonly="">
	</div>
	<div class="form-group">
		<label for="">Tên đăng nhập</label>
		<input required="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" type="text" class="form-control" id="" name="ten_dn" placeholder="Tên đăng nhập">
	</div>
	<div class="form-group">
		<label for="">Tên khách hàng</label>
		<input required="" type="text" class="form-control" id="" name="ten_kh" placeholder="Tên khách hàng">
	</div>
	<div class="form-group">
		<label for="">Mật khẩu</label>
		<input required=""  type="password" class="form-control" id="" name="mat_khau" placeholder="Mật khẩu">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input required="" type="email" class="form-control" id="" name="email" placeholder="Nhập email của bạn">
	</div>
	<div class="form-group">
		<label for="">Vai trò</label>
		<select class="form-control" name="vai_tro">
			<option value="1" >Quản trị</option>
			<option value="0" >Khách hàng</option>
		</select>
	</div>
	<button name="them" class="btn btn-success">Thêm mới</button>
	<a href="index.php?view" class="btn btn-info">Danh sách khách hàng</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->