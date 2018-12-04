<div class="container">
    <main class="all-tour">
        <h2 class="alert alert-info tieu-de-top">Các mô hình khách sạn</h2>
        <div class="col-md-8 box-tour-dl">
		<?php foreach ($khach_san as $key => $value) :
			extract($value)
            // echo "<pre>";
            // print_r($tour);die;
		 ?>
            
                <div class="col-md-6 tour-img">
                    <img style="max-height: 220px" class="img-thumbnail img-responsive tour-img" src="../css/images/<?=$hinh?>" alt="" >
                    <!-- <img class="img-thumbnail img-responsive tour-img" src="https://travel.com.vn/Images/LastMinute/lm_181112043753_539561.jpg" alt="" > -->
                    <div class="xem-chi-tiet">
                       <a class="chi-tiet-tour" href="#">Chi Tiết</a>
                    </div>    
                </div>
                <div class="col-md-6 tour-content">      
                    <h4><a href="#"><?=$ten_ks;?></a></h4>
                    <div class="col-md-6 tour-content-left">
                      <!--   <p>Ngày khởi hành: <span><?=$ngay_khoi_hanh ?></span></p>
                        <p>Số ngày: <span> <?=$so_ngay ?></span></p> -->
                        
                    </div>
                    <div class="col-md-6 tour-content-right">
                        <!-- <p>Nơi khởi hành: <br><span><?=$noi_khoi_hanh?></span></p>
                        <p>Số chỗ còn nhận: <?=($tong_so_ve-$so_ve_da_dat)?></p> -->
                    </div>
                    <div class="tour-content-bot col-md-12">
                    	<div class="col-md-12" >
                    		<div class="chitiet" style="height: 100px;overflow:hidden;text-align: justify;"><?=$chi_tiet?></div>
                    		<a class="text-right " data-toggle="modal" href='#modal-<?=$ma_ks?>'>Xem thêm</a>
                        </div>
                        <div class="col-md-12">
                            <h4 class="gia-tour"><?=number_format($gia)?> đ/ngày</h4>
                        </div>
                    </div>
                </div>
                <hr class="hr-end-tour">
                <div class="modal fade" id="modal-<?=$ma_ks?>">
			<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4><a href="#"><?=$ten_ks;?></a></h4>
						</div>
						<div class="modal-body" style="text-align: justify;">
							<?=$chi_tiet?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
			</div>
        <?php endforeach; ?>
            </div>
            

    </main>
</div>
