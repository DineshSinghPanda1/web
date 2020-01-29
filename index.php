<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
      <?php 
       include "header.php"
      ?>

      <!--Carousel ---->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/3" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/1" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <!---- End of Carousel---> 

 <!--Section contant--->
 
<div class="container-fluid">
   <h3> Product</h3>
 <div class="row">
 <div class="col-sm">
 <div class="card" style="width: 18rem;">
     <img src="image/jacket.jpg" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title">Jacket</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Buy Me!</a>
    </div>
    </div>
    </div>
    <div class="col-sm">
 <div class="card" style="width: 18rem;">
     <img src="image/shoes.jpg" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title">Shoes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Buy me!</a>
    </div>
    </div>
    </div>
    <div class="col-sm">
 <div class="card" style="width: 18rem;">
     <img src="image/cap.jpg" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title">Cap</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Buy me !</a>
    </div>
    </div>
    </div>
    <div class="col-sm">
 <div class="card" style="width: 18rem;">
     <img src="image/watch.jpg" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title">Watch</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Buy me! 50%off</a>
    </div>
    </div>
    </div>
  
  </div>
</div>
<!---Section end--->
<!---Footer-->
<?php
include "footer.php";
?>

<!---End Foonter--->

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>