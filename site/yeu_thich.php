
 <div class="container">
 	<h3 class="alert-info alert">Danh sách tour yêu thích</h3>
 	<table class="table table-hover">
 		<tbody>
 			<tr>
 				<td>Mã Tour</td>
 				<td>Tên Tour</td>
 				<td>Hình</td>
 				<td>Thao tác</td>
 				<td></td>

 			</tr>
<?php 
foreach ($l as $key => $value) :
			extract($value);
			$list=tour_by_ma_tour($ma_tour);
			extract($list);
		
 ?>

 		<tr>
 			<td><?=$ma_tour?></td>
 			<td><?=$ten_tour?></td>
 			<td><img width="100px" src="../css/images/<?=$hinh?>" alt=""></td>
 			<td>
 				
 				<a class="btn btn-info" href="chitiet/chitiet.php?ma_tour=<?=$ma_tour?>">Xem chi tiết</a>
 				<a class="btn btn-danger" href="index.php?delete_yt&ma_yt=<?=$ma_yt?>&ma_tour=<?=$ma_tour?>">Xóa</a>
 			</td>
 		</tr>

 <?php endforeach ?>
 			
 		</tbody>
 	</table>
 </div>

