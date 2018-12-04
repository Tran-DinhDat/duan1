<?php
	function kvt(){
		$sql="SELECT * from khu_vuc";
		return pdo_query($sql);
	}
	function kvt_insert($ten_kvt, $hinh){
		$sql = "INSERT INTO khu_vuc(ten_kvt,hinh) VALUES(?,?)";
		pdo_execute($sql, $ten_kvt, $hinh); 
	}
	function kvt_byid($ma_kvt){
		$sql="SELECT * from khu_vuc where ma_kvt=?";
		return pdo_query_one($sql,$ma_kvt);
	}
	function kvt_update($ma_kvt, $ten_kvt, $hinh) {
		$sql = "UPDATE khu_vuc SET ten_kvt=?, hinh=? WHERE ma_kvt=? ";
		pdo_execute($sql, $ten_kvt, $hinh, $ma_kvt);
	}	

	function delete($ma_kvt){
    $sql = "DELETE FROM khu_vuc WHERE ma_kvt=?";
    if(is_array($ma_kvt)){
        foreach ($ma_kvt as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kvt);
    }
}
	function delete_tour_kv($ma_kvt){
    $sql = "DELETE FROM tour WHERE ma_kvt=?";
    if(is_array($ma_kvt)){
        foreach ($ma_kvt as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kvt);
    }
}
function delete_tour_bl($ma_tour){
    $sql = "DELETE FROM binh_luan WHERE ma_tour=?";
    if(is_array($ma_tour)){
        foreach ($ma_tour as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_tour);
    }
}
function delete_tour_tt($ma_tour){
    $sql = "DELETE FROM thanh_toan WHERE ma_tour=?";
    if(is_array($ma_tour)){
        foreach ($ma_tour as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_tour);
    }
}
function delete_tour_yt($ma_tour){
    $sql = "DELETE FROM yeu_thich WHERE ma_tour=?";
    if(is_array($ma_tour)){
        foreach ($ma_tour as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_tour);
    }
}
?>