     <nav class="navbar navbar-inverse nav-main">   
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$SITE_URL?>/index.php">TravleAce</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a class="nav-a" href="<?=$SITE_URL?>/index.php">Trang chủ</a></li>
            <li><a class="nav-a" href="<?=$SITE_URL?>/index.php?gioi_thieu">Giới thiệu</a></li>
             <li><a class="nav-a" href="<?=$SITE_URL?>/index.php?khuyen_mai">Khuyến Mãi</a></li>
            <li><a class="nav-a" href="#">Dịch vụ</a></li>
             <li><a class="nav-a" href="<?=$SITE_URL?>/index.php?lien_he">Liên hệ</a></li>
          </ul>
        <div class="log">
          <?php if (isset($_SESSION['user'])) :?>
              <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$_SESSION['user']['ten_kh']?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?dsyt">Toour yêu thích</a></li>
                <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?ls">Lịch xử đặt vé</a></li>
                 <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?capnhat">Cập nhập TK</a></li>
                <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?doimk">Đổi mật khẩu</a></li>
                <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?dangxuat">Đăng xuất</a></li>
                <?php if ($_SESSION['user']['vai_tro']==1):?>
                <li><a class="dropdown-item" href="<?=$SITE_URL?>/index.php?quanli">Quản lí Website</a></li>
              <?php endif;?>
            </div>
          </div> 
          <?php else :?>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Đăng nhập</button>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Đăng kí</button>
          <!-- Modal -->
        <?php endif; ?>
        </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   <!--  đăng nhâp modal -->
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title alert-info alert">Đăng nhập</h4>
        </div>
        <div class="container-fluid">
          <form action="<?=$SITE_URL?>/index.php" method="POST" role="form">
          <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" id="" name='ten' placeholder="Nhập tên" required="">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="mk" placeholder="Nhập mật khẩu" required="">
          </div>
          <button type="submit" class="btn btn-primary" name='dangnhap'>Đăng nhập</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
  <!-- đăng kí modal -->
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title alert-success alert">Đăng kí</h4>
        </div>
        <div class="container-fluid">
          <form action="<?=$SITE_URL?>/index.php" method="POST" role="form">
          <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" required="" class="form-control" id="" name='tendn' placeholder="Nhập tên đăng nhập" required="">
          </div>
           <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" required="" class="form-control" id="" name='ten' placeholder="Nhập tên đăng nhập" required="">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" required="" class="form-control" id="" name="mkf" placeholder="Nhập mật khẩu" required="">
          </div>
          <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" required="" class="form-control" id="" name="mkcf" placeholder="Nhập lại mật khẩu" required="">
          </div>
           <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="emaill" placeholder="Nhập email" required="">
          </div>
          <div class="form-group">
            <input type="checkbox" class="" id=""  required=""> Tôi đông ý điều quản sử dụng
          </div>
          <button type="submit" class="btn btn-primary dangki" name='dangki'>Đăng kí</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>