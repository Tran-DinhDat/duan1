<?php 
require "../../global.php";
require "../../pdo.php";
require "../../dao/binhluan.php";
require "../../dao/tour.php";
check_login_admin();
extract($_REQUEST);
if(exist_param('delete')){
		try {
			delete_binh_luan($ma_bl);
			$select_binh_luan=select_binh_luan();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
	}

elseif (exist_param('chi_tiet')) {
		$select_binh_luan=binh_luan($ma_tour);
		$VIEW_NAME='quan_ly_bl/view_bl.php';
}
	else{
		$tour = tour();
		$VIEW_NAME='quan_ly_bl/bl.php';
	}
require '../layout.php';
?>
