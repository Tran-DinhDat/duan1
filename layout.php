
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>TravelAce</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    
  <link rel="stylesheet" href="http://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="http://owlcarousel2.github.io/OwlCarousel2/assets/css/docs.theme.min.css">
  <link href="<?=$ROOT_URL?>/css/main.css" rel="stylesheet">
  <link href="<?=$ROOT_URL?>/css/chi_tiet_tour.css" rel="stylesheet">


  </head>

  <body>
  	<header>
  <!-- /.container -->
    <?php require 'content/top-nav.php' ; ?>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    </header>
     <div class="container">
          <?php require $VIEW_NAME;?>
          
    </div>

      <?php require 'content/footer.php' ; ?>

<script type="text/javascript">

  $(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});
</script>
<script src="http://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="http://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
  </body>
</html>
