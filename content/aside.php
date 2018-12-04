<div class="panel panel-default">
		<div class="container-seach">
		<form action="">
			<div class="email-box">
				<i class="fas fa-search"></i>
				<input class="tbox" type="text" value="" name="keywords" placeholder="Từ khóa tìm kiếm ...">
				<button class="btn-seach btn" type="submit" >Tìm Kiếm</button>
			</div>
		</form>
		<!-- .\====================== -->
		
    <!-- ================== -->
	</div>

</div>
<div class="panel panel-default panel-khu-vuc-tour">
	<h4 class="alert alert-info tieu-de-h4">Du lịch theo khu vực</h4>
	<div class="panel-body">	
		<ul class="list-group">	
		<?php foreach ($kvt as $key => $value) : ?>
	
	
			<div class="row aside-kvt">
                <div class="col-md-4">
                    <img class="img-thumbnail img-responsive" src="../css/images/<?=$value["hinh"] ?>">
                </div>
                <div class="col-md-8">
                    <a href="<?=$SITE_URL?>/index.php?ma_kvt=<?=$value['ma_kvt']?>&theo_KV"><?=$value['ten_kvt']?></a>
                </div>
            </div>
			<hr class="hr-tour-xnn">
       	<?php endforeach; ?>	
       	
		</ul>
	</div>
</div>

<div class="panel panel-default">
	<h4 class="alert alert-info tieu-de-h4">Các tour xem nhiều nhất</h4>
	<div class="panel-body">
		<ul class="list-group">	
		<?php foreach ($slx as $key => $value) : ?>
	
	
			<div class="row tour-xem-nhieu-nhat">
                <div class="col-md-4 img">
                    <img class="img-thumbnail img-responsive" src="../css/images/<?=$value["hinh"] ?>">
                </div>
                <div class="col-md-8 ten-tour-xnn">
                    <a href="<?=$SITE_URL?>/chitiet/chitiet.php?ma_tour=<?=$value['ma_tour']?>"><?=$value['ten_tour']?></a>
                </div>
            </div>
            <hr class="hr-tour-xnn">

       	<?php endforeach; ?>	
       	
		</ul>
	</div>
</div>
