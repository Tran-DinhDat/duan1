<?php 
require_once'../dao/user.php';
extract($_REQUEST);
$user=user();
if (isset($_POST['dangnhap'])) {
		foreach ($user as $key => $value) {
		extract($value);
		$u=$_POST['ten'];
		$p=$_POST['mk'];
		if ($u==$value['ten_dn']&$p==$value['mat_khau']) {
			$kh=kh_by_username($ten_dn);
			extract($kh);
			if ($vai_tro==TRUE) {
			$_SESSION['user']=$kh = array('ten_dn' =>$ten_dn ,'vai_tro' =>$vai_tro ,'ten_kh'=>$ten_kh,'ma_kh'=>$ma_kh );
			header("location:index.php");
			}else{
				echo '<script type="text/javascript">alert("Tài khoản phân quyền quản trị")</script>';
				echo '<script type="text/javascript">window.location.href="index.php"</script>';
			}
		}
		else{
			echo '<script type="text/javascript">alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}}
	}elseif (exist_param('dangxuat')) {
		unset($_SESSION['user']);
		echo '<script type="text/javascript">window.location.href="index.php"</script>';
	}
	require 'dangnhap_ui.php'
 ?>