<?php

class TareasView
{

  function __construct()
  {


  }

  function Home(){


    echo '
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <base href="http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/" target="_blank">

    <title>The Rolling Stones</title>
    <link href="img/favicon.png" rel="icon" type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/master.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
  <nav class="mainNav navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">The Rolling Stones</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="band.html">BAND</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.html">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tour.html">TOUR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music.html">MUSIC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signUp.html">SIGN-UP</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>

    <!-- Page Header -->
    <header class="masthead">   <!-- Imagén de fondo del nav -->
    <div class="container">

      <div class="overlay">
      </div>
        <div class="row">
          <div class="col-lg-8 col-md-10">
            <div class="site-heading">

            </div>
          </div>
        </div>

      </div>
      </header>

    <div id="contenido">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="bordeArribaCarousel">

            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/rs1.jpg" alt="RS 1" style="width:100%;">
                </div>

                <div class="item">
                  <img src="img/rs2.jpg" alt="RS 2" style="width:100%;">
                </div>
              <div class="item">
                  <img src="img/rs3.jpg" alt="RS 3" style="width:100%;">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="bordeAbajoCarousel col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row articulo">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="bordeArribaNews">
              <h1>NEWS</h1>
            </div>
            <div class="noticia col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a href="http://www.rollingstones.com/2018/03/29/exhibitionism-opens-in-nashville-today/">
                <img width="90%" src="img/news1.jpg" alt="Image News"><h3>EXHIBITIONISM OPENS IN NASHVILLE TODAY</h3></a>
            </div>
            <div class="noticia col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a href="http://www.rollingstones.com/2018/03/23/dublin-on-general-sale-now/">
                <img width="90%" src="img/news2.jpg" alt="Image News 2"><h3>NASHVILLE EXHIBITIONISM OPENS THIS WEEK</h3></a>
            </div>
            <div class="noticia col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <a href="http://www.rollingstones.com/2018/03/22/dublin-presale-now-on/">
                <img width="90%" src="img/news3.jpg" alt="Image News 3"><h3>DUBLIN PRESALE NOW ON</h3></a>
            </div>
            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <header class="bordeArribaMusic">
              <h1>MUSIC</h1>
            </header>
            <div>
              <img src="img/onAir.png" alt="Rolling Stones on Air" style="width:100%;">
            </div>
            <div class="bordeAbajoMusic col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
          </div>
        </div>
      </div>
    </div> <!-- Fin container -->

    <footer class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-10 col-lg-offset-4 col-md-offset-4 col-xs-offset-1">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="http://twitter.com/RollingStones"><img src="img/iconotwitter.ico" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.facebook.com/therollingstones"><img src="img/iconoface.ico" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.youtube.com/user/therollingstones"><img src="img/iconoyoutube.ico" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="http://instagram.com/therollingstones/"><img src="img/iconoinsta.ico" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.rollingstones.com/newsletter"><img src="img/iconomail.ico" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

    <!-- Carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.js"></script>
    <script src="js/main.js"></script>

    <script  src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
  </body>

  </html>';


  }



}




 ?>