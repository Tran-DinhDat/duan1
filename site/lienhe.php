<div class="container">
    <h2 class="text-center alert-info alert tieu-de-top"> Gửi liên hệ</h2>
    <div class="col-md-12  lien-he" >
        <form action="index.php?gui_lh" method="POST" class="form-horizontal form-lien-he" role="form" >
            <div class="form-group col-md-6">
                <label>họ tên</label>
                <input type="text" name="ten" class="form-control" required="">
            </div>
             <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required="">
            </div>
             <div class="form-group col-md-6">
                <label>Số điện thoai</label>
                <input type="tel" pattern="^\d{10}$" class="form-control" name="dien_thoai" placeholder="" required="">
            </div>
             <div class="form-group col-md-6">
                <label>Địa chỉ</label>
                <input type="text" name="dia_chi" class="form-control" required="">
            </div>
             <div class="form-group col-md-6">
                <label>Tiêu đề</label>
                <input type="text" name="tieu_de" class="form-control" required="">
            </div>
             <div class="form-group col-md-6">
                <label>Nội dung</label>
                <textarea type="text" name="noi_dung" class="form-control" required="" rows="5"></textarea>
            </div>
            <div class="col-md-12">
                 <button type="submit" class="btn btn-primary " >Gửi liên hệ</button>
            </div>
           
        </form>
     </div>
</div>