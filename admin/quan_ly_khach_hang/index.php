<?php 
	require '../../global.php';
	require '../../pdo.php';
	require '../../dao/khach_hang.php';
 extract($_REQUEST);
 check_login_admin();
$khach_hang = khach_hang();
// if (isset($_SESSION['user'])) {
// 	$ma_kh=$_SESSION['user']['ma_kh'];
// 	}
 if (exist_param('new')) {
 	$VIEW_NAME='new.php';
 }elseif (exist_param("them")) {
 	$user=user();
 	foreach ($user as $key => $value) {
			$t=($value['ten_dn']==$ten_dn);
			$e=($value['email']==$email);
		}
		if($t>0) {
			echo '<script type="text/javascript">alert("Tên đăng nhập đã đc sử dụng")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}elseif($e>0) {
			echo '<script type="text/javascript">alert("email đã đc sử dụng")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}else{
		try {
			kh_insert( $ten_dn,$ten_kh, $mat_khau, $email, $vai_tro);
            unset( $ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
	}
		$VIEW_NAME = "new.php";
	}
elseif (exist_param("edit")) {
		$khach_hang=kh_byid($ma_kh);
		extract($khach_hang);
		$VIEW_NAME = "edit.php";
}elseif(exist_param("edit_kh")) {
		try {
			kh_update($ma_kh,$ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
}
elseif(exist_param('delete')){
		try {
			delete_bl_kh($ma_kh);
			delete_tt_kh($ma_kh);
			delete_kh($ma_kh);
			$khach_hang = khach_hang();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view.php';
	}
else {

	$VIEW_NAME="view.php";
}
require '../layout.php';

 ?>

 