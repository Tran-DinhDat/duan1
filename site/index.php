<?php 
require_once'../global.php';
require_once'../pdo.php';
	require_once'../dao/kvt.php';
	require_once'../dao/tour.php';
    require_once'../dao/khach_hang.php';
	require_once'../dao/chitiet.php';
	require_once "../dao/lienhe.php";


	$tour=tour();
	$kvt= kvt();
	$user=user();
	$slx= top_10_luot_xem();
	extract($_REQUEST);

	// code tim tu khoa
	if (isset($_SESSION['user'])) {
		$ma_kh=$_SESSION['user']['ma_kh'];
	}	
	if (isset($_POST['dangnhap'])) {
		foreach ($user as $key => $value) {
		extract($value);
		$u=$_POST['ten'];
		$p=$_POST['mk'];
		if ($u==$value['ten_dn']&$p==$value['mat_khau']) {
			$kh=kh_by_username($ten_dn);
			extract($kh);
			$_SESSION['user']=$kh = array('ten_dn' =>$ten_dn ,'vai_tro' =>$vai_tro ,'ten_kh'=>$ten_kh,'ma_kh'=>$ma_kh );
			header("location:index.php");
		}
		else{
			echo '<script type="text/javascript">alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}
		}}
	if (exist_param('dangki')){
		foreach ($user as $key => $value) {
			$t=($value['ten_dn']==$tendn);
			$e=($value['email']==$emaill);
		}
		if ($mkf != $mkcf) {
			echo '<script type="text/javascript">alert("Xác nhận mật khẩu chưa chính xác")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}elseif($t>0) {
			echo '<script type="text/javascript">alert("Tên dn đã đc sử dụng")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}elseif($e>0) {
			echo '<script type="text/javascript">alert("email đã đc sử dụng")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}else{
			try {
				$vai_tro='0';
				dangki($tendn,$ten,$mkf,$emaill,$vai_tro);
				echo '<script type="text/javascript">alert("Đăng kí thành công")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
			} catch (Exception $e) {
				echo '<script type="text/javascript">alert("Lỗi")</script>';
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
			}
		}
	}
	if (exist_param('quanli')) {
		echo '<script type="text/javascript">window.location.href="../admin/index.php"</script>';
	}
	elseif (exist_param('dangxuat')) {
		unset($_SESSION['user']);
		echo '<script type="text/javascript">window.location.href="index.php"</script>';
	}
	if (exist_param('capnhat')){
		$kh=kh_by_id($ma_kh);
		extract($kh);
    $VIEW_NAME="capnhat.php";
	}else{
		$H='Các tour nổi tiếng';
		$VIEW_NAME="trangchu.php";}
	if (exist_param('btn-capnhat')) {
		$ma_kh=$_SESSION['user']['ma_kh'];
		try{
			capnhat($ma_kh,$ten_dn,$ten_kh,$email);
			echo '<script type="text/javascript">alert("Cập nhật thành công"); window.location.href="index.php"</script>';
			unset($_SESSION['user']);
			$_SESSION['user']=$kh = array('ten_dn' =>$ten_dn ,'vai_tro' =>$vai_tro ,'ten_kh'=>$ten_kh,'ma_kh'=>$ma_kh );
			}
			catch (Exception $exc) {
				echo '<script type="text/javascript">alert("Có lỗi xảy ra, vui lòng thử lại sau")</script>';
			}
	}elseif (exist_param("doimk")) {
		$VIEW_NAME = "doimk.php";
	}elseif (isset($_POST["doimatkhau"])) {
		 	$kh=kh_by_id($ma_kh);extract($kh);
			if ($matkhaucu != $mat_khau) {
				echo '<script type="text/javascript">alert("Sai mật khẩu")</script>';
			}
			elseif ($matkhaumoi != $matkhaumoi2) {
				echo '<script type="text/javascript">alert("Xác nhận mật khẩu không chính xác")</script>';
			}
			else {
				try {
					doimatkhau($ma_kh,$matkhaumoi);
					echo '<script type="text/javascript">alert("Đổi mật khẩu thành công !")</script>';
				} catch (Exception $e) {
					echo '<script type="text/javascript">alert("Có lỗi xảy ra")</script>';
				}
			}
		}
	elseif (exist_param('dsyt')) {
		$l=kh_yeu_thich($ma_kh);
		$VIEW_NAME="yeu_thich.php";
		}
	elseif (exist_param('delete_yt')) {
		$ma_yt=$_GET['ma_yt'];
		try {
			xoa_yeu_thich($ma_yt);
			$ma_tour=$_GET['ma_tour'];
			$tour=tour_by_ma_tour($ma_tour);
			extract($tour);
			unlike($ma_tour,$so_luot_yeu_thich);
			echo '<script type="text/javascript">alert("ok")</script>';
			header("location:index.php?dsyt");
		} catch (Exception $e) {
			echo '<script type="text/javascript">alert("Có lỗi xảy ra")</script>';
		}
	}
	elseif(exist_param('delete_ls')){
		try {
			$ma_tt=$_GET['ma_tt'];
			delete_ls($ma_tt);
			$ls=select_ls();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME="ls.php";
	}

	elseif (exist_param('theo_KV')) {
		$ma_kvt=$_GET['ma_kvt'];
		$t=kvt_byid($ma_kvt);
		$tour= tour_by_KV($ma_kvt);
		$H=$t['ten_kvt'];
		}
	elseif(exist_param("keywords")){
    $tour = tour_select_keyword($keywords);
    $H="Từ khóa tìm kiếm" . " : ".$keywords;
	}
	elseif (exist_param('khach_san')) {
		$khach_san=khach_san();
		$VIEW_NAME="khach_san.php";
	}
	elseif (exist_param('ls')) {
		$ma_kh=$_SESSION['user']['ma_kh'];
		$ls=ls_dat_ve($ma_kh);
		$VIEW_NAME="ls.php";
	}
	elseif (exist_param('gioi_thieu')) {
		$VIEW_NAME="gioithieu.php";
	}
		
	elseif (exist_param('khuyen_mai')) {
		$VIEW_NAME="khuyen_mai.php";
	}
	elseif (exist_param('lien_he')) {
		$VIEW_NAME="lienhe.php";
	}
	elseif (exist_param('gui_lh')) {
		try {
			insert($ten,$dien_thoai,$email,$dia_chi,$tieu_de,$noi_dung);
			echo '<script type="text/javascript"> alert("Đã gửi");window.location.href="index.php"</script>';
		} catch (Exception $e) {
			echo '<script type="text/javascript"> alert("Lỗi");window.location.href="index.php"</script>';
		}
	}
	require '../layout.php';
?>