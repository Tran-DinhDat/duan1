<?php 
require_once "../../global.php";
require_once "../../pdo.php"; 
require_once "../../dao/chitiet.php";
require_once "../../dao/tour.php";
$ma_tour=$_GET['ma_tour'];
$tour=tour_by_ma_tour($ma_tour);
extract($tour);
if (exist_param('next')) {
	$_SESSION['thanhtoan']=$_REQUEST;
	$VIEW_NAME="pttt.php";
}elseif (exist_param('final')){
	$_SESSION['thanhtoan']['gia']=$_SESSION['thanhtoan']['gia']*$_SESSION['thanhtoan']['so_ve'];
	extract(($_SESSION['thanhtoan']));
	if ($so_ve>$tong_so_ve-$so_ve_da_dat) {
		unset($_SESSION['thanhtoan']);
		echo "<script>alert('Số vé bạn đặt lớn hơn số vé còn lại')</script>";
		echo "<script>window.location.href='dattour.php?ma_tour=$ma_tour'</script>";
	}else{
	try {
		thanh_toan($ma_tour,$ma_kh,$ten_kh,$dien_thoai,$ghi_chu,$dia_chi,$so_ve,$email,$gia);
		update_ve($ma_tour,$so_ve_da_dat,$so_ve);
		echo "<script>alert('Thành công')</script>";
		unset($_SESSION['thanhtoan']);
		echo "<script>window.location.href='../index.php'</script>";
	} catch (Exception $e) {
		echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại sau')</script>";
		echo "<script>window.location.href='../index.php'</script>";
	}
	}
}
else{
	$VIEW_NAME="dattour-ui.php";
}
require "../../layout.php";
?>