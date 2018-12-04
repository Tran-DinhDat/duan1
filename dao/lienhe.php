<?php 
	function insert($ten,$dien_thoai,$email,$dia_chi,$tieu_de,$noi_dung){
		$sql="INSERT into lien_he(ten, dien_thoai,email,dia_chi,tieu_de,noi_dung) values(?,?,?,?,?,?)";
		pdo_execute($sql,$ten,$dien_thoai,$email,$dia_chi,$tieu_de,$noi_dung);
	}
	function lien_he(){
			$sql = "SELECT * FROM lien_he";
		return pdo_query($sql);
	}
		function delete_lh($id){
    $sql = "DELETE FROM lien_he WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
 ?>