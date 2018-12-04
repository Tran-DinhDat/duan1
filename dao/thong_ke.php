<?php 
	function thong_ke_tour(){
	    $sql = "SELECT lo.ma_kvt, lo.ten_kvt,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.gia) gia_min,"
            . " MAX(hh.gia) gia_max,"
            . " AVG(hh.gia) gia_avg"
            . " FROM tour hh "
            . " JOIN khu_vuc lo ON lo.ma_kvt=hh.ma_kvt "
            . " GROUP BY lo.ma_kvt, lo.ten_kvt";
    	return pdo_query($sql);
	}
 ?>