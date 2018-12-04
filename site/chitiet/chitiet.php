<?php 
require_once "../../global.php";
require_once "../../pdo.php";
require_once "../../dao/chitiet.php";
require_once "../../dao/binhluan.php";
require_once "../../dao/tour.php";
$ma_tour=$_GET['ma_tour'];
tang_so_luot_xem($ma_tour);
$tour=tour_by_ma_tour($ma_tour);
extract($_REQUEST);
extract($tour);
$tour_cung_loai=tour_cung_loai($ma_kvt);
if (exist_param('like')) {
	$ma_kh=$_SESSION['user']['ma_kh'];
	$kh_yt=kh_yeu_thich($ma_kh);
	//danh sách yêu thích trống
	if (empty($kh_yt)) {
		try {
			like($ma_tour,$so_luot_yeu_thich);
			yeu_thich($ma_tour,$ma_kh);
			echo "<script>alert('thành công')</script>";
			header("location:chitiet.php?ma_tour=$ma_tour");
			} 	
		catch (Exception $exc) {
			echo "<script>alert('thất bại')</script>";
			};
	}else{
		foreach ($kh_yt as $key => $value) {
			$a[] = ($value["ma_tour"]==$ma_tour);
		}
			if (array_sum($a)==0) {
				try {
			like($ma_tour,$so_luot_yeu_thich);
			yeu_thich($ma_tour,$ma_kh);
			echo "<script>alert('thành công')</script>";
			header("location:chitiet.php?ma_tour=$ma_tour");
			} 	
		catch (Exception $exc) {
			echo "<script>alert('thất bại')</script>";
			};
			}else{
				echo "<script>alert('Tour đã thích rồi')</script>";
			}
		}
	}
$binh_luan=binh_luan($ma_tour);
if (exist_param('gui_bl')) {
	try {
		$ma_kh=$_SESSION['user']['ma_kh'];
		$ten_kh=$_SESSION['user']['ten_kh'];
		gui_bl($ma_kh,$ten_kh,$ma_tour,$noi_dung);
		echo "<script>alert('ok')</script>";
		header("location:chitiet.php?ma_tour=$ma_tour");
	} catch (Exception $exc) {
		echo "<script>alert('loi')</script>";
	}
}
if (exist_param('btn-dat-tour')) {
	$VIEW_NAME="../dattour.php";
}
if (exist_param('btn-dn')) {
	echo "<script>alert('Đăng nhập hặc đăng kí để đặt tour')</script>";
}
$VIEW_NAME="chitiet-ui.php";
require "../../layout.php";
 ?> 