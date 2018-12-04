<?php 
require "../../global.php";
require "../../pdo.php";
require "../../dao/thong_ke.php";
check_login_admin();
if(exist_param("chart")){
    $VIEW_NAME = "quan_ly_thong_ke/chart.php";
}
else{
    $VIEW_NAME = "quan_ly_thong_ke/view.php";
}
	$items = thong_ke_tour();
require '../layout.php';
 ?>