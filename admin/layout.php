
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Quản trị website</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=$ROOT_URL?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=$ROOT_URL?>/css/admin.css">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="opacity: 1">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$ROOT_URL?>/site/">TravelAce</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/duan1/admin/quan_ly_kvt/">Khu vực Tour</a></li>
            <li><a href="/duan1/admin/quan_ly_tour">Tour</a></li>
            <li><a href="/duan1/admin/quan_ly_khach_hang">Khách hàng</a></li>
            <li><a href="/duan1/admin/quan_ly_bl">Bình luận</a></li>
            <li><a href="/duan1/admin/quan_ly_tt">Thanh toán</a></li>
            <li><a href="/duan1/admin/quan_ly_thong_ke">Thống kê</a></li>
            <li><a href="/duan1/admin/lien_he">Liên hệ</a></li>
          </ul>
          <div class="log" >
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$_SESSION['user']['ten_kh']?>
            </button>
             <div class="dropdown-menu" style="right: 60px; left: unset;" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="<?=$ADMIN_URL?>/dangnhap.php?dangxuat">Đăng xuất</a></li>
            </div>
         </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:60px;">

     	<?php require $VIEW_NAME ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

