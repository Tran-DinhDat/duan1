<?php 
require "../../global.php";
require "../../pdo.php";
require '../../dao/tour.php';
require '../../dao/thanh_toan.php';
if (exist_param('chi_tiet')) {
	$ma_tour=$_GET['ma_tour'];
	$tour = tour_by_id($ma_tour);
	$tt=thanh_toan_by_tour($ma_tour);
	$VIEW_NAME="chi_tiet.php";
}else{
	$tour = tour_so_ve();
	$VIEW_NAME="view.php";
}
require '../layout.php'; ?>