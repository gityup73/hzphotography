<!DOCTYPE html>
<html>

<head>
    <title>Heather Zindars Photography | Pet Photography </title>
    <?php include('header.php'); ?>
</head>

<body>

<?php $page = 'pets'; include('menu.php'); ?>

  <div class="container">
    <br>
    <div class="carousel-hdr">PETS</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/pets1.jpg" alt="dog" width="512" height="341">
        </div>

        <div class="item">
          <img src="images/puppy2.jpg" alt="dog" width="259" height="388">
        </div>
      
        <div class="item">
          <img src="images/puppy3.jpg" alt="dog" width="441" height="394">
        </div>

        <div class="item">
          <img src="images/puppy4.jpg" alt="dog" width="288" height="351">
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
    </div><!-- end myCarousel -->

    <?php include('footer.php'); ?>

  </div><!-- end container -->

</body>
</html>
