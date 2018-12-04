<?php 
require "../../global.php";
require "../../pdo.php";
require "../../dao/kvt.php";
require "../../dao/tour.php";
check_login_admin();
extract($_REQUEST);
if (exist_param('new')) {
		$VIEW_NAME='new.php';
	}elseif (exist_param("them")) {
		$up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : "abc.jpg";
		try {
			kvt_insert($ten_kvt, $hinh);
            unset($ten_kvt, $hinh);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
		$VIEW_NAME = "new.php";
	}elseif(exist_param('delete')){
		try {
			$ma_kvt=$_GET['ma_kvt'];
	
			
			$tour= tour_by_KV($ma_kvt);
			foreach ($tour as $key => $value) {
				delete_tour_bl($value['ma_tour']);
				delete_tour_tt($value['ma_tour']);
				delete_tour_yt($value['ma_tour']);
			}
			delete_tour_kv($ma_kvt);
			delete($ma_kvt);
			echo '<script type="text/javascript"> alert("Xoá thành công");window.location.href="index.php"</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view_kvt.php';
	}elseif(exist_param("edit")) {
		$kvt=kvt_byid($ma_kvt);
		extract($kvt);
		$VIEW_NAME = "edit.php";
	}elseif(exist_param("edit_kvt")) {
		$up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
		try {
			kvt_update($ma_kvt,$ten_kvt,$hinh);
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
	}
	else{
		 $kvt=kvt();
		$VIEW_NAME='quan_ly_kvt/view_kvt.php';
	}
require '../layout.php';
?>
