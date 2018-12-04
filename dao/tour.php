<?php 
	 function tour(){
		$sql = "SELECT * FROM tour";
		return pdo_query($sql);
	}
    function tour_by_id($ma_tour){
        $sql = "SELECT * FROM tour where ma_tour=?";
        return  pdo_query_one($sql,$ma_tour);
    }
	function tour_insert($ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat){
		$sql = "INSERT INTO tour(ten_tour, hinh, ma_kvt, gia, so_ngay, so_luot_xem,ngay_khoi_hanh,noi_khoi_hanh,noi_den,chi_tiet,tong_so_ve, so_ve_da_dat) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		pdo_execute($sql,$ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat);
	}

	function tour_select_keyword($keyword){
    $sql = "SELECT * FROM tour t "
            . " JOIN khu_vuc lo ON lo.ma_kvt=t.ma_kvt "
            . " WHERE ten_tour LIKE ? OR ten_kvt LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
function xoa_yeu_thich($ma_yt){
    $sql = "DELETE FROM yeu_thich WHERE ma_yt=?";
    if(is_array($ma_yt)){
        foreach ($ma_yt as $ma) {
            pdo_execute($sql, $id);
        }
    }
else{
        pdo_execute($sql, $ma_yt);
    }
    }
    function unlike($ma_tour,$so_luot_yeu_thich){
		$sql="UPDATE tour set so_luot_yeu_thich=$so_luot_yeu_thich-1 where ma_tour=$ma_tour";
		pdo_execute($sql,$so_luot_yeu_thich,$ma_tour);
	}
    function tour_by_KV($ma_kvt){
        $sql = "SELECT * FROM tour WHERE ma_kvt=?";
        return pdo_query($sql,$ma_kvt);
    }
	function delete_tour($ma_tour){
    $sql = "DELETE FROM tour WHERE ma_tour=?";
    if(is_array($ma_tour)){
        foreach ($ma_tour as $ma_tour) {
            pdo_execute($sql, $ma_tour);
        }
    }
    else{
        pdo_execute($sql, $ma_tour);
    }
}
 function update_tour($ma_tour,$ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat){
        $sql = "UPDATE tour SET ten_tour=?, hinh=?, ma_kvt=?, gia=?, so_ngay=?, so_luot_xem=?,ngay_khoi_hanh=?,noi_khoi_hanh=?,noi_den=?,chi_tiet=?,tong_so_ve=?, so_ve_da_dat=? WHERE ma_tour=? ";
        pdo_execute($sql, $ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat, $ma_kvt);
    }
function update_ve($ma_tour,$so_ve_da_dat,$so_ve){
    $sql="UPDATE tour set so_ve_da_dat=$so_ve_da_dat+$so_ve where ma_tour=3";
     pdo_execute($sql,$so_ve_da_dat,$so_ve,$ma_tour);
}


function top_10_luot_xem(){
        $sql = "SELECT * FROM tour WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
       }

function tour_cung_loai($ma_kvt){
        $sql = "SELECT * FROM tour WHERE ma_kvt=? LIMIT 3";
        return pdo_query($sql,$ma_kvt);
    }
$countries = array(

    '1'  => 'An Giang',
    '2'  => 'Bà Rịa-Vũng Tàu',
    '3'  => 'Bạc Liêu',
    '4'  => 'Bắc Kạn',
    '5'  => 'Bắc Giang',
    '6'  => 'Bắc Ninh',
    '7'  => 'Bến Tre',
    '8'  => 'Bình Dương',
    '9'  => 'Bình Định',
    '10' => 'Bình Phước',
    '11' => 'Bình Thuận',
    '12' => 'Cà Mau',
    '13' => 'Cao Bằng',
    '14' => 'Cần Thơ (TP)',
    '15' => 'Đà Nẵng (TP)',
    '16' => 'Đắk Lắk',
    '17' => 'Đắk Nông',
    '18' => 'Điện Biên',
    '19' => 'Đồng Nai',
    '20' => 'Đồng Tháp',
    '21' => 'Gia Lai',
    '22' => 'Hà Giang',
    '23' => 'Hà Nam',
    '24' => 'Hà Nội (TP)',
    '25' => 'Hà Tây',
    '26' => 'Hà Tĩnh',
    '27' => 'Hải Dương',
    '28' => 'Hải Phòng (TP)',
    '29' => 'Hòa Bình',
    '30' => 'Hồ Chí Minh (TP)',
    '31' => 'Hậu Giang',
    '32' => 'Hưng Yên',
    '33' => 'Khánh Hòa',
    '34' => 'Kiên Giang',
    '35' => 'Kon Tum',
    '36' => 'Lai Châu',
    '37' => 'Lào Cai',
    '38' => 'Lạng Sơn',
    '39' => 'Lâm Đồng',
    '40' => 'Long An',
    '41' => 'Nam Định',
    '42' => 'Nghệ An',
    '43' => 'Ninh Bình',
    '44' => 'Ninh Thuận',
    '45' => 'Phú Thọ',
    '46' => 'Phú Yên',
    '47' => 'Quảng Bình',
    '48' => 'Quảng Nam',
    '49' => 'Quảng Ngãi',
    '50' => 'Quảng Ninh',
    '51' => 'Quảng Trị',
    '52' => 'Sóc Trăng',
    '53' => 'Sơn La',
    '54' => 'Tây Ninh',
    '55' => 'Thái Bình',
    '56' => 'Thái Nguyên',
    '57' => 'Thanh Hóa',
    '58' => 'Thừa Thiên - Huế',
    '59' => 'Tiền Giang',
    '60' => 'Trà Vinh',
    '61' => 'Tuyên Quang',
    '62' => 'Vĩnh Long',
    '63' => 'Vĩnh Phúc',
    '64' => 'Yên Bái',
     )
?>