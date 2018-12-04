
<!-- script link tab -->
	<script type="text/javascript">
		$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
	</script>

<div class="container">
	<div class="col-md-12 chi-tiet-tour">
    <h2 class="alert alert-info tieu-de-top"><?=$ten_tour?></h2>
		<div class="col-md-4 img-tour">
			<img width="100%" class="img-responsive img-thumbnail" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>" alt="">
			<div class="tools">
				<a class="yeu-thich" href="chitiet.php?like&ma_tour=<?=$ma_tour?>">
					<span class="fas fa-heart text-danger "></span>
					<span class="so-luot-yt"><?=$so_luot_yeu_thich?></span>
				</a>
				<a class="luot-xem" href="">
					<span class="far fa-eye"></span>
					<span class="so-luot-xem"><?=$so_luot_xem?></span>
				</a>
			</div>
		</div>
		<div class="col-md-8">
			<table class="table table-hover table-chi-tiet-ui" border="0">
				<tbody>
					<tr>
						<th class="bold">Mã tour</th>
						<td><?=$ma_tour?></td>
					</tr>
					<tr>
						<th class="bold">Khởi hành</th>
						<td><?=$ngay_khoi_hanh?></td>
					
					</tr>
					<tr>
						<th class="bold">Nơi khởi hành</th>
						<td><?=$noi_khoi_hanh?></td>
					
					</tr>
           <tr>
              <th class="bold"><span class="title-detail-tour">Nơi đến </span></th>
              <td><span><?=$noi_den?></span></td>
            </tr>
					<tr>
						<th class="bold">Số ngày</th>
						<td><?=$so_ngay?></td>
						
					</tr>
					<tr>
						<th class="bold">Yêu thích</th>
						<td><?=$so_luot_yeu_thich?></td>	
					</tr>
				</tbody>
			</table>
			
			<div class="col-md-6"><h4 class="gia-tour"> <?=number_format($gia) ?> đ</h4></div>
	     
			<?php if (strtotime(date("Y-m-d")) < strtotime($ngay_khoi_hanh)):?>
          <?php if (isset($_SESSION['user'])):
          ?>
             <div class="col-md-6 "><a href="../dattour/dattour.php?ma_tour=<?=$ma_tour?>"><button type="button" name="btn-dat-tour" class="btn-info btn btn-dat-tour">Đặt ngay</button></a></div>
             <?php else: ?>
               <div class="col-md-6 "><a class=" btn btn-info btn-dat-tour" style="display: flex;justify-content: center;align-items: center;"href="chitiet.php?btn-dn&ma_tour=<?=$ma_tour?>">Đặt ngay</a></div>
              <?php endif; ?>
       <?php else: ?>
        <div class="col-md-6 "><button type="" class="btn-info btn btn-dat-tour" disabled="">Đã khởi hành</button></div>
       <?php endif; ?>
			 
		</div>
	</div>
	<div class="col-md-12">
		<!-- <div class="col-md-12">
			<h3 class="alert alert-info">Chi tiết</h3>
			<p><?=$chi_tiet?></p>
		</div> -->
	<div class="col-md-12 link-tab-ui">
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary p-md-0" href="#tab1" data-toggle="tab"><i class="fas fa-info-circle"></i>
                <div class="hidden-xs">Chi tiết</div>
            </button>
        </div>
        
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default p-md-0" href="#tab3" data-toggle="tab"><i class="far fa-comments"></i>
                <div class="hidden-xs">Bình luận</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <p style="text-align: justify;" ><?=$chi_tiet?></p>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3><?php echo $a; ?></h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
        	<?php foreach ($binh_luan as $key => $value) :
        		extract($value);
        	 ?>
        	<div class="panel panel-success">
        		<div class="panel-heading">
        			<h3 class="panel-title"><?=$ten_kh?></h3>
        		</div>
        		<div class="panel-body">
        			<?=$noi_dung?>
        		</div>
        		<div class="panel-footer">
        			<?=$ngay_bl?>
        		</div>
        	</div>
          	<?php endforeach; ?>
          	<?php if (isset($_SESSION['user'])) :
          	 ?>
          	<div class="panel panel-default">
          		<div class="panel-heading">
          			<h2 class="panel-title tieu-de-top " style="color: #fff; background: #337ab7">Gửi bình luận</h2>
          		</div>
          		<div class="panel-body">
          			<form action="" method="POST" role="form">
          			
          			
          				<div class="form-group">
          					<textarea rows="5" name="noi_dung"></textarea>
          				</div>
          				<button type="submit" name="gui_bl" class="btn btn-primary">Gửi</button>
          			</form>
          		</div>
          	</div>
         
          <?php else: ?>
          	<h3 class="panel-title">Đăng nhập hoặc đang kí để gửi bình luận</h3>
          	 <?php endif; ?>
        </div>
      </div>
    </div>
	</div>

 <div class="tour-cung-loai col-md-12">
  <h2 class="alert alert-info tieu-de-top">Tour cùng khu vực</h2>
  <?php foreach ($tour_cung_loai as $key => $value):
   extract($value);?>
    <!-- <div>
      <?=$ten_tour?>
     <img width="100%" class="img-responsive img-thumbnail" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>" alt="">
    </div> -->
     <a href="">
    <div class="col-md-4 tour-cung-loai-box" >
        <div class="img">
          <img width="100%" class="img-responsive img-thumbnail" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>" alt="">
        </div>
        <div class="fram-ten-tour">
          <h3><?=$ten_tour?></h3>
        </div>
    </div>
     </a>
 <?php endforeach; ?>
</div>
</div>
</div>