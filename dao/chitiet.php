<?php 
	function tour_by_ma_tour($ma_tour){
		$sql="SELECT * from tour where ma_tour=?";
		return pdo_query_one($sql,$ma_tour);
	}
	function like($ma_tour,$so_luot_yeu_thich){
		$sql="UPDATE tour set so_luot_yeu_thich=$so_luot_yeu_thich+1 where ma_tour=$ma_tour";
		pdo_execute($sql,$so_luot_yeu_thich,$ma_tour);
	}
	function yeu_thich($ma_tour,$ma_kh){
		$sql="INSERT into yeu_thich(ma_tour,ma_kh) values(?,?)";
		pdo_execute($sql,$ma_tour,$ma_kh);
	}
	function kh_yeu_thich($ma_kh){
		$sql="SELECT * from yeu_thich where ma_kh=$ma_kh";
		return pdo_query($sql,$ma_kh);
	}
	function tang_so_luot_xem($ma_tour){
    $sql = "UPDATE tour SET so_luot_xem = so_luot_xem + 1 WHERE ma_tour=?";
    pdo_execute($sql, $ma_tour);
	}
	function thanh_toan($ma_tour,$ma_kh,$ten_kh,$dien_thoai,$ghi_chu,$dia_chi,$so_ve,$email,$gia){
		$sql="INSERT into thanh_toan(ma_tour,ma_kh,ten_kh,dien_thoai,ghi_chu,dia_chi,so_ve,email,gia) values(?,?,?,?,?,?,?,?,?)";
		pdo_execute($sql,$ma_tour,$ma_kh,$ten_kh,$dien_thoai,$ghi_chu,$dia_chi,$so_ve,$email,$gia);
	}
 ?>