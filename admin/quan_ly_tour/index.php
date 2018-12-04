<?php 
require "../../global.php";
require "../../pdo.php";
require '../../dao/tour.php';
require '../../dao/kvt.php';
extract($_REQUEST);
if (exist_param('them')) {
		$kvt=kvt();
		$VIEW_NAME='new.php';
	}elseif (exist_param("themmoi")) {
		$up_hinh = save_file("hinh", "$IMAGE_DIR/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : "abc.jpg";
		try {
			tour_insert($ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat);
            unset($ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
		$VIEW_NAME = "new.php";
	}elseif(exist_param('delete')){
		try {
			$ma_tour=$_GET['ma_tour'];
			delete_tour($ma_tour);
			$tour=tour();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view.php';
	}elseif(exist_param("edit")) {
		$tour_edit=tour_by_id($ma_tour);
		extract($tour_edit);
		$kvt=kvt();
		$VIEW_NAME = "edit.php";
	}
	elseif (exist_param('cap_nhat')) {
		$ma_tour=$_GET['ma_tour'];
		$up_hinh = save_file("hinh", "$IMAGE_DIR/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    	try {
			update_tour($ma_tour,$ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat);
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
	}
	else{
		$tour = tour();
		$VIEW_NAME='quan_ly_tour/view.php';
	}
require '../layout.php';
?>
