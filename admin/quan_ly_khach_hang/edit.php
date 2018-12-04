

<form action="index.php" method="POST"  enctype="multipart/form-data">
	<h3 class="alert-info alert">Cập nhật thông tin khách hàng</h3>

	<div class="form-group">
		<label for="">Mã khách hàng</label>
		<input type="text" class="form-control" id="" name="ma_kh" value="<?=$ma_kh?>" readonly="" >
	</div>
		<div class="form-group">
		<label for="">Tên đăng nhập</label>
		<input type="text" required="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" class="form-control" id="" name="ten_dn" value="<?=$ten_dn?>">
	</div>
	<div class="form-group">
		<label for="">Tên khách hàng</label>
		<input type="text" required="" class="form-control" id="" name="ten_kh" value="<?=$ten_kh?>">
	</div>
	<div class="form-group">
		<label for="">Mật khẩu</label>
		<input required="" type="password" class="form-control" id="" name="mat_khau" value="<?=$mat_khau?>">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input required="" type="email" class="form-control" id="" name="email" value="<?=$email?>">
	</div>
	<div class="form-group">
		<label for="">Vai trò</label>
		<select class="form-control" name="vai_tro">
			<option value="1" >Quản trị</option>
			<option value="0" >Khách hàng</option>
		</select>
	</div>
	<button name="edit_kh" class="btn btn-success">Cập nhật</button>
	<a href="index.php?view" class="btn btn-info">Danh sách khách hàng</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->