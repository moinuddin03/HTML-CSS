<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Alpha watches</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body onload="myLoader()">
    <!---------- Loader Start ---------->
    <div id="loading"></div>
    <script>
    var preloader = document.getElementById('loading');
    function myLoader()
    {
    preloader.style.display = 'none';
    }
    </script>
    <!---------- Loader End   ---------->
    
    <!---------- Nabvar Start ---------->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-uppercase">
      <div class="container">
        <a class="navbar-brand" href="#">Alpha Watches</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">watches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NEW ARRIVALS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Watches for
              </a>
              <div class="dropdown-menu bg-transparent border-0" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Men<i class="fas fa-male ml-5"></i></a>
                <a class="dropdown-item" href="#">Women&nbsp;&nbsp;<i class="fas fa-female ml-3"></i></a>
                <a class="dropdown-item" href="#">Kids<i class="fas fa-child ml-5"></i></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Smartwatches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ACCESSORIES</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!---------- Navbar End   ---------->
    <!---------- Carousel Start ---------->
    <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img alt="First slide" class="d-block w-100" src="img/slider-img-1.jfif">
          <div class="carousel-caption d-none d-md-block">
            <h5>Limited edition</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>  
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Second slide" class="d-block w-100" src="img/slider-img-2.jfif">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lx movement</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Third slide" class="d-block w-100" src="img/slider-img-3.jfif">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sport series</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
          </div>
        </div>
        </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
      </div>
      <!---------- Carousel End   ---------->
      
      <!---------- Optional JavaScript Start ---------->
      <!--
      =====================================================================================================-->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <!--
      =====================================================================================================-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!--
      =====================================================================================================-->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!--
      =====================================================================================================-->
      <script type="text/javascript" src="javascript/javascript.js"></script>
      <!--
      =====================================================================================================-->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
      <!---------- Optional JavaScript End   ---------->
    </body>
  </html>