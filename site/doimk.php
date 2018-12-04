<form action="index.php" method="POST" role="form">
	<legend>Đổi mật khẩu</legend>

	<div class="form-group">
		<label for="">Mật khẩu cũ</label>
		<input type="password" class="form-control" name="matkhaucu" id="" placeholder="Nhập mật khẩu cũ" required="">
	</div> 
	<div class="form-group">
		<label for="">Mật khẩu mới</label>
		<input type="password" class="form-control" name="matkhaumoi" id="" placeholder="Nhập mật khẩu mới" required="">
	</div>
	<div class="form-group">
		<label for="">Xác nhận mật khẩu</label>
		<input type="password" class="form-control" name="matkhaumoi2" id="" placeholder="Nhập lại mật khẩu" required="">
	</div>

	

	<input class="btn-danger btn" type="submit" name="doimatkhau" value="Xác nhận đổi mật khẩu" >
</form>