<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Trang Chủ </title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/index.css" />
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body >
      <?php include('../partials/header.php') ?>
    
        <main>
    
            <div class="alert alert-info" role="alert">
                <h1 class="alert-heading" >Chào bạn</h1>
                <p>Cám ơn bạn đã truy cập trang web này theo vì hàng triệu trang web khác trên internet.
                    <strong>The Pet makes your day</strong> giúp bạn tra cứu thông tin về các giống chó mèo phổ biến và các hình ảnh chó mèo giúp bạn giải trí.
                </p>
            </div> 
        
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="4000">
    <a class="nav-link" href="searchdog.php"><img src="img/DOG.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item" data-interval="4000">
    <a class="nav-link" href="searchcat.php"><img src="img/CAT.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item" data-interval="4000">
    <a class="nav-link" href="dog.php"><img src="img/2.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item" data-interval="4000">
    <a class="nav-link" href="cat.php"><img src="img/3.jpg" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
  <a class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
    <hr>
    <h4> Thông tin về vài loại chó mèo </h4>
    <div class="product-list">
        <ul class="row list-unstyled">
    <?php include('../partials/random.php') ?>
    </ul>
    </div>
    
</main> 

<?php include('../partials/footer.php') ?>
    

</body>

</html>
