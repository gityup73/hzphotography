
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	    </button>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
          <li<?php if ($page=="index") echo " class=\"active\""; ?>>
            <a href="index.php">HOME</a></li>

          <li<?php if ($page=="family") echo " class=\"active\""; ?>>
	        <a href="family.php">FAMILY</a></li>

	      <li<?php if ($page=="children") echo " class=\"active\""; ?>>
	        <a href="children.php">CHILDREN</a></li>

	      <li<?php if ($page=="pets") echo " class=\"active\""; ?>>
	        <a href="pets.php">PETS</a></li> 

	      <li<?php if ($page=="sports") echo " class=\"active\""; ?>>
	        <a href="sports.php">SPORTS</a></li>

	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#">INFO</a>
	        <ul class="dropdown-menu">
              <li><a href="bio.php">BIO</a></li>
              <li><a href="contact_view.php">CONTACT</a></li>
	        </ul>
	      </li>

	      <!-- <li class="dropdown" <?php if ($page=="bio") echo " class=\" active\""; ?>>
	        <a class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown" href="bio.php">BIO</a>
            <ul class="dropdown-menu">
              <li<?php if ($page=="contact") echo " class=\"active\""; ?>>
                <a href="contact_view.php">CONTACT</a></li>
            </ul>
	      </li> -->
	      
    	</ul>
    </div>
  </div>
</nav>




