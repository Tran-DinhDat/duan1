<?php function binh_luan($ma_tour){
		$sql = "SELECT * FROM binh_luan where ma_tour=?";
		return pdo_query($sql,$ma_tour);

	} 
	function gui_bl($ma_kh,$ten_kh,$ma_tour,$noi_dung){
			$sql="INSERT into binh_luan(ma_kh,ten_kh,ma_tour,noi_dung) values(?,?,?,?)";
			pdo_execute($sql,$ma_kh,$ten_kh,$ma_tour,$noi_dung);
		}

	function so_bl($ma_tour){
	$sql="SELECT COUNT(ma_tour) from binh_luan where ma_tour=?";
	return pdo_query_one($sql,$ma_tour);
	}

	 function select_binh_luan(){
	$sql="SELECT * from binh_luan";
	return pdo_query($sql);
}

	
	function delete_binh_luan($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma_bl) {
            pdo_execute($sql, $ma_bl);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
   
}
		?>
		