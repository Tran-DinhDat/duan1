<?php 
require "../../global.php";
require "../../pdo.php";
require '../../dao/lienhe.php';
if (exist_param('xoa')) {
	try {
		$id=$_GET['id'];
		delete_lh($id);
		echo '<script type="text/javascript">alert("ok");window.location.href="index.php"</script>';
	} catch (Exception $e) {
		echo '<script type="text/javascript">alert("lỗi")</script>';
	}
}else{
	$lienhe= lien_he();
	$VIEW_NAME="view.php";
}
require '../layout.php'; ?>