<?php include('header.php'); ?>
<body>
<?php $page = 'bio'; include('menu.php'); ?>

<div class="container">
  <div class="row content no-gutter" id="bio-row">

    <div class="col-sm-4" id="bio-col1">
        <p class="logo"><img class="image-responsive" src="images/logoblue.jpg"></p>
    </div> <!-- end col-sm-4 -->

    <div class="col-sm-4" id="bio-col2">
      <p id="bio-img"><img class="image-responsive" src="images/heather2.jpg" alt="heather" width="191" height="264"></p>
    </div>

    <div class="col-sm-4 " id="bio-col3">
      <div id="aboutheather">
        <p>Place background info here...xxxx xxxxx xxxxxxxx xxxxxxx xxxxx</p>
        <p><a href="contact_view.php">Contact Me</a></p>
      </div>
    </div><!-- end col-sm-7 -->
  </div><!-- end row -->

  <?php include('footer.php'); ?>

</div><!-- end container -->
<script type="text/javascript"> // RELOADS WEBPAGE WHEN MOBILE ORIENTATION CHANGES  
    window.onorientationchange = function() { 
         window.location.reload();
    };
</body>
</html>
