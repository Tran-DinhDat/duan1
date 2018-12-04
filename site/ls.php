<?php 	require_once'../dao/tour.php'; ?>
 <table class="table table-hover">
 	<thead>
 		<tr>
 			<th>Mã TT</th>
 			<th>Mã tour</th>
 			<th>Tên tour</th>
 			<th>Số vé</th>
 			<th>Khởi hành</th>
 			<th>Nơi khởi hành</th>
 			<th>Nơi đến</th>
 			<th>Giá</th>
 			<th>Thao tác</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			foreach ($ls as $key => $value)  :
 				extract($value);
 		 ?> 
	 			<tr>
	 			<td><?=$ma_tt ?></td>
	 			<td><?php
					$tour=tour_by_ma_tour($ma_tour);
					extract($tour);?>
	 				<?=$ma_tour ?></td>
	 			<td style="width: 400px"><a href="chitiet/chitiet.php?ma_tour=<?=$ma_tour?>"><?=$ten_tour ?></a></td>
	 			<td><?=$so_ve ?></td>
	 			<th><?=$ngay_khoi_hanh?></th>
	 			<th><?=$noi_khoi_hanh?></th>
	 			<th><?=$noi_den?></th>
	 			<td><?=$gia ?></td>
	 			<td>
	 				<a class="btn btn-danger" href="index.php?delete_ls&ma_tt=<?=$ma_tt?>">Xóa</a>
	 			</td>
	 		</tr>
 		<?php endforeach; ?>
 	</tbody>
 </table>