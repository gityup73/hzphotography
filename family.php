<!DOCTYPE html>
<html>

<head>
    <title>Heather Zindars Photography | Family Photography </title>
    <?php include('header.php'); ?>
</head>
<body>

<?php $page = 'family'; include('menu.php'); ?>

  <div class="container">
    <br>
    <div class="carousel-hdr">FAMILY</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/BarnhillFamily.jpg" alt="family" width="400" height="360">
        </div>

        <div class="item">
          <img src="images/family1.jpg" alt="family" width="340" height="409">
        </div>
      
        <div class="item">
          <img src="images/family2.jpg" alt="family" width="512" height="375">
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
