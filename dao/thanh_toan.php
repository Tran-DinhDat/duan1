<?php 
	function tour_so_ve(){
		$sql = "SELECT * FROM tour ORDER BY so_ve_da_dat DESC";
		return pdo_query($sql);
	}
	function so_luot_thanh_toan($ma_tour){
		 $sql = "SELECT COUNT(ma_tour) FROM thanh_toan where ma_tour=?";
        return  pdo_query_one($sql,$ma_tour);
	}
	function thanh_toan_by_tour($ma_tour){
	$sql="SELECT * from thanh_toan where ma_tour=?";
	return pdo_query($sql,$ma_tour);
}
 ?>