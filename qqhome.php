<html>
<head>
  <title>Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .a1{
    text-decoration: none;
    color: inherit;
  }

  body{
    background-image: url("qb.jpg");
    margin-top: 80px;
    padding: 0;
    font-family: sans-serif;
  }
  nav ul{
    margin-top: 40px;
    margin: 0 auto;
    width: 620px;
    background-color: rgba(55, 125, 122,0.6);
    overflow: hidden;
    color: white;
    padding: 20px 30px;
  }
  nav ul li{
    display: inline;
    padding-left: 40px;
    padding-right: 40px;
  }
  @media screen (min-width: 270px) {
    nav ul li{
      box-sizing: border-box;
      width:100%;
    }
  }

  </style>
</head>
<body>
  <nav>
      <ul>
          <a class="a1" href="qqhome.php"><li>Home</li></a>
          <a class="a1" href="qqregister.php"><li>Register</li></a>
          <a class="a1" href="qqabout.php"><li>About Us</li></a>
          <a class="a1" href="qqabout.php"><li>Our History</li></a>
      </ul>
  </nav>
  <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="pic1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic2.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic4.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic5.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic6.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="pic7.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
