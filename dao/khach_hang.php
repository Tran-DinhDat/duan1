<?php 
function user(){
		$sql="SELECT * from user";
		return pdo_query($sql);
	};
	function dangki($ten_dn,$ten_kh,$mat_khau,$email,$vai_tro){
		$sql="INSERT into user(ten_dn,ten_kh,mat_khau,email,vai_tro) values(?,?,?,?,?)";
		pdo_execute($sql,$ten_dn,$ten_kh,$mat_khau,$email,$vai_tro==0);
	}

	function capnhat($ma_kh,$ten_dn,$ten_kh,$email){
		$sql="UPDATE user set ma_kh=?,ten_dn=?,ten_kh=?,email=? where ma_kh=$ma_kh";
		pdo_execute($sql,$ma_kh,$ten_dn,$ten_kh,$email);
	}
	function doimatkhau($ma_kh,$matkhaumoi) {
		$sql = "UPDATE user set mat_khau =? where ma_kh=$ma_kh";
		pdo_execute($sql,$matkhaumoi);
	}
		function kh_by_username($ten_dn){
		$sql="SELECT * from user where ten_dn=?";
		return pdo_query_one($sql,$ten_dn);
	}

		function kh_by_id($ma_kh){
		$sql="SELECT * from user where ma_kh=?";
		return pdo_query_one($sql,$ma_kh);
	}
	function ls_dat_ve($ma_kh){
	$sql="SELECT * from thanh_toan where ma_kh=?";
	return pdo_query($sql,$ma_kh);
}

	function select_ls(){
	$sql="SELECT * from thanh_toan";
	return pdo_query($sql);
	};

	function delete_ls($ma_tt){
    $sql = "DELETE FROM thanh_toan WHERE ma_tt=?";
    if(is_array($ma_tt)){
        foreach ($ma_tt as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_tt);
    }
}
function khach_hang(){
	$sql="SELECT * from user";
	return pdo_query($sql);
} 
function kh_insert($ten_kh, $ten_dn, $mat_khau, $email, $vai_tro){
		$sql = "INSERT INTO user(ten_kh, ten_dn, mat_khau, email, vai_tro) VALUES(?,?,?,?,?)";
		pdo_execute($sql,  $ten_kh, $ten_dn, $mat_khau, $email, $vai_tro); 
	}
	function kh_byid($ma_kh){
		$sql="SELECT * from user where ma_kh=?";
		return pdo_query_one($sql,$ma_kh);
	}
	function kh_update($ma_kh, $ten_dn,$ten_kh, $mat_khau, $email, $vai_tro) {
		$sql = "UPDATE user SET  ten_dn=?, ten_kh=?, mat_khau=?, email=?, vai_tro=? WHERE ma_kh=?";
		pdo_execute($sql, $ten_dn,$ten_kh, $mat_khau, $email, $vai_tro,$ma_kh);
	}	

	function delete_kh($ma_kh){
    $sql = "DELETE FROM user WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}
function delete_bl_kh($ma_kh){
    $sql = "DELETE FROM binh_luan WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}
function delete_tt_kh($ma_kh){
    $sql = "DELETE FROM thanh_toan WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}
 ?>


