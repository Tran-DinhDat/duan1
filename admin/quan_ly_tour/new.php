 <div class="container">
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<h3 class="alert alert-info">Thêm tour</h3>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Mã tour</label>
			<input type="text" class="form-control" name="ma_tour" readonly="" id="" value="auto number" ">
		</div>
		<div class="form-group">
			<label for="">Tên tour</label>
			<input type="text" class="form-control"  name="ten_tour" id="" required="" placeholder="Nhập tên" ">
		</div>
		<div class="form-group">
			<label for="">Hình</label>
			<input type="file" name="hinh" required="">
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
			<input type="number" min="1" class="form-control" name="gia" placeholder="Nhập giá" required="">
		</div>
		<div class="form-group">
			<label for="">Số ngày</label>
			<input type="number" min="1" class="form-control" name="so_ngay" placeholder="Số ngày" required="">
		</div>
		<div class="form-group " style="display: none">
			<label for="">Lượt xem</label>
			<input type="text" class="form-control" readonly="" name="so_luot_xem" value="0" required="">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group"style="display: none">
			<label for="">Yêu thích</label>
			<input type="text" class="form-control" readonly="" name="so_luot_yeu_thich" value="0" required="">
		</div>
		<div class="form-group">
			<label for="">Ngày khởi hành</label>
			<input type="date" class="form-control" name="ngay_khoi_hanh" placeholder="Ngày khởi hành" required="">
		</div>
		<div class="form-group">
			<label for="">Nơi khởi hành</label>
			<select class="form-control" name="noi_khoi_hanh">
				<?php foreach ($countries as $key => $value) {
				 ?>
				<option value="<?=htmlspecialchars($value)?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
				<?php

					}

				?>
			</select>
		</div>
		<div class="form-group">
			<label for="">Nơi đến</label>
				<select class="form-control" name="noi_den">
				<?php foreach ($countries as $key => $value) {
				 ?>
				<option value="<?=htmlspecialchars($value)?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
			<?php

			}

			?>
			</select>
		</div>
		
		<div class="form-group">
			<label for="">Tổng số vé</label>
			<input type="number" min="1" class="form-control" name="tong_so_ve" placeholder="Tổng số vé" required="">
		</div>
		<div class="form-group">
			<label for="">Số vé đã đặt</label>
			<input type="text" class="form-control" readonly="" name="so_ve_da_dat" value="0" >
		</div>
	</div>
	<div class="col-md-12">	
		<div class="form-group">
			<label for="">Chi tiết</label>
			<textarea name="chi_tiet" id="input" class="form-control" rows="5" ></textarea>
		</div>
		<button type="submit" class="btn btn-success" name="themmoi">Thêm</button>
		<a  class="btn btn-info" href="index.php">Danh sách</a>
	</div>
		
	</form>
</div>