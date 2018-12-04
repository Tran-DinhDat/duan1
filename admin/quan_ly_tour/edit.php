 <div class="container">
	<form action="index.php?ma_tour=<?=$ma_tour?>" method="POST" enctype="multipart/form-data">
		<h3 class="alert alert-info">Cập nhật tour</h3>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Mã tour</label>
			<input type="text" class="form-control" name="ma_tour" readonly="" id="" value="<?=$ma_tour?>" ">
		</div>
		<div class="form-group">
			<label for="">Tên tour</label>
			<input type="text" class="form-control"  name="ten_tour" id="" required="" value="<?=$ten_tour?>" ">
		</div>
		<div class="form-group">
			<label for="">Hình</label>
			<input type="file" name="hinh" required="">
			<?=$hinh?>
		</div>
		<div class="form-group">
			<label for="">Mã KVT</label>
			<select class="form-control" name="ma_kvt" required="">
				<?php foreach ($kvt as $key => $value) :
					extract($value);
				 ?>
				<option value="<?=$ma_kvt?>"><?=$ten_kvt?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" class="form-control" name="gia" value="<?=$gia?>" required="">
		</div>
		<div class="form-group">
			<label for="">Số ngày</label>
			<input type="text" class="form-control" name="so_ngay" value="<?=$so_ngay?>" required="">
		</div>
		<div class="form-group">
			<label for="">Lượt xem</label>
			<input type="text" class="form-control" readonly="" name="so_luot_xem" value="<?=$so_luot_xem?>" required="">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Yêu thích</label>
			<input type="text" class="form-control" readonly="" name="so_luot_yeu_thich" value="<?=$so_luot_yeu_thich?>" required="">
		</div>
		<div class="form-group">
			<label for="">Ngày khởi hành</label>
			<input type="text" class="form-control" name="ngay_khoi_hanh" value="<?=$ngay_khoi_hanh?>"required="">
		</div>
		<div class="form-group">
			<label for="">Nơi khởi hành</label>
			<input type="text" class="form-control" name="noi_khoi_hanh" value="<?=$noi_khoi_hanh?>"required="">
		</div>
		<div class="form-group">
			<label for="">Nơi đến</label>
			<input type="text" class="form-control" name="noi_den" value="<?=$noi_den?>" required="">
		</div>
		
		<div class="form-group">
			<label for="">Tổng số vé</label>
			<input type="text" class="form-control" name="tong_so_ve" value="<?=$tong_so_ve?>"required="">
		</div>
		<div class="form-group">
			<label for="">Số vé đã đặt</label>
			<input type="text" class="form-control" readonly="" name="so_ve_da_dat" value="<?=$so_ve_da_dat?>">
		</div>
	</div>
	<div class="col-md-12">	
		<div class="form-group">
			<label for="">Chi tiết</label>
			<textarea name="chi_tiet" id="input" class="form-control" rows="5" required="required"> <?=$chi_tiet?></textarea>
		</div>
		<button type="submit" class="btn btn-success" name="cap_nhat">Cập nhật</button>
		<a  class="btn btn-info" href="index.php">Danh sách</a>
	</div>
		
	</form>
</div>