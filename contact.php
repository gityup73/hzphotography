<!DOCTYPE html>
<html>

<head>
    <title>Heather Zindars Photography | Contact Me </title>
    <?php include('header.php'); ?>
</head>

<body>

<?php $page = 'contact'; include('menu.php'); ?>

<div class="container">
  <div class="row content no-gutter">
  
    <div class="col-sm-4" id="contact-col1">
        <p class="logo"><img class="image-responsive" src="images/logoblue.jpg" alt="Heather Zindars Photography logo"></p>
    </div> <!-- end contact page logo col -->

    <div class="col-sm-4" id="pricing-col">
      <div id="pricing-hdr">PRICING</div>
      <div class="pricing">
        <p>FAMILY</p>
        <p>Enter detail here</p>
        <p>2HR SESSION $150</p>
        <p class="divider"> </p>
      </div>
      <div class="pricing">
        <p>CHILDREN/PETS</p>
        <p>Enter detail here</p>
        <p>2HR SESSION $150</p>
        <p class="divider"> </p>
      </div>
      <div class="pricing">
        <p>SPORTS</p>
        <p>Enter detail here</p>
        <p>2HR SESSION $150</p>
      </div>
    </div> <!-- end pricing column -->

    <div class="col-sm-4" id="form-col">
      <!-- <form id="contact-form" action="https://formspree.io/soxfan1173@gmail.com" -->
      <!-- method="POST">  -->
      <form id="contact-form" action="https://formspree.io/heatherzindarsphotography@gmail.com"
      method="POST">  
        <fieldset>
          <legend>CONTACT ME </legend>
        </fieldset>
        <fieldset id="contactinfo">
          <p id="hz-email">heatherzindarsphotography@gmail.com</p>
          <p>(303) 884-7474</p>
          <p>
            <a href="https://www.facebook.com/HeatherZindarsPhotography/" class="glyphlinks"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a>
            <a href="https://www.behance.net/heatherzindars" class="glyphlinks"><i class="fa fa-behance-square fa-lg" aria-hidden="true"></i></a> 
            <a href="#" class="glyphlinks"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a> 
            <a href="#" class="glyphlinks"><i class="fa fa-wordpress fa-lg" aria-hidden="true"></i></a> 
          </p>
        </fieldset>
        <fieldset>
          <input name="name" placeholder="NAME" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input name="email" placeholder="EMAIL" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
          <input name="phone" placeholder="PHONE" type="tel" tabindex="3">
        </fieldset>
        <fieldset>
          <textarea name="message" rows="6" placeholder="Type your Message Here...." tabindex="5" required></textarea>
        </fieldset>
        <fieldset id="btn-align">
          <input name="submit" type="submit" id="contact-submit" value="SEND!">
        </fieldset>
      </form><!-- end contact form -->
    </div><!-- end contact column -->
    <?php include('footer.php'); ?>
  </div><!-- end row -->
</div><!-- end container -->

</body>
</html>
